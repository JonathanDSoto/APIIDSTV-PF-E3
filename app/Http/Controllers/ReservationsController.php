<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Room;
use App\Models\Coupon;
use App\Models\Rates;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ReservationsController extends Controller {
    public function reservations() {
        $rooms = Room::all();
        $clients = Client::all();
        $reservations = Reservation::all();
        $coupons = Coupon::all();
        $rates = Rates::all();

        return view('reservations', compact('rooms', 'clients', 'reservations', 'coupons', 'rates'));
    }

    public function store(Request $request) {

        $request->validate([
            'addNameClient' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    $clientExists = DB::table('clients')
                        ->whereRaw("CONCAT(name, ' ', last_name) = ?", [$value])
                        ->exists();

                    if(!$clientExists) {
                        $fail("El cliente no está registrado en el sistema. Verifica que el cliente este registrado o que su nombre y apellidos fueron introducidos correctamente");
                    }
                },
            ],
            'addNameRoom' => [
                'required',
                'string',
                'max:255',
                Rule::exists('rooms', 'name_room')
                    ->where(function ($query) use ($request) {
                        $query->where('state', 'Libre')
                            ->whereNotExists(function ($subQuery) use ($request) {
                                $subQuery->from('reservations')
                                    ->where('name_room', $request->input('addNameRoom'))
                                    ->where(function ($query) use ($request) {
                                        $query->whereBetween('check_in', [$request->input('addCheckIn'), $request->input('addCheckOut')])
                                            ->orWhereBetween('check_out', [$request->input('addCheckIn'), $request->input('addCheckOut')]);
                                    });
                            });
                    }),
            ],
            'addCheckIn' => 'required|date',
            'addCheckOut' => [
                'required',
                'date',
                'after:addCheckIn',
                function ($attribute, $value, $fail) use ($request) {
                    $checkIn = strtotime($request->input('addCheckIn'));
                    $checkOut = strtotime($value);
                },
            ],
            'addCoupon' => 'nullable|string|max:255',
            'addTotalPrice' => 'decimal:0,2',
        ], [
            'addNameRoom.exists' => 'La habitación reservada en este periodo de tiempo o se encuentra actualmente en limpieza/mantenimiento.',
        ]);

        $reservations = new Reservation();

        $reservations->name_client = $request->addNameClient;
        $reservations->name_room = $request->addNameRoom;
        $reservations->rate = $request->addRate;
        $reservations->check_in = $request->addCheckIn;
        $reservations->check_out = $request->addCheckOut;
        $reservations->coupon = $request->addCoupon;
        $reservations->total_price = $request->addTotalPrice;

        $reservations->save();

        return redirect()->route('reservations');
    }

    public function edit($id) {
        $reservations = Reservation::find($id);

        return view('reservations', compact('reservation'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'editNameClient' => 'required|string|max:255',
            'editNameRoom' => 'required|string|max:255',
            'editCheckIn' => 'required|date',
            'editCheckOut' => 'required|date|after:today',
            'editCoupon' => 'required|string|max:255',
            'editTotalPrice' => 'decimal:0,2',
        ]);

        $reservations = Reservation::find($id);

        $reservations->name_client = $request->editNameClient;
        $reservations->name_room = $request->editNameRoom;
        $reservations->check_in = $request->editCheckIn;
        $reservations->check_out = $request->editCheckOut;
        $reservations->coupon = $request->editCoupon;
        $reservations->total_price = $request->editTotalPrice;

        $reservations->save();

        return redirect()->route('reservations');
    }

    public function destroy($id) {
        $reservations = Reservation::find($id);

        $reservations->delete();

        return redirect()->route('reservations');
    }
}