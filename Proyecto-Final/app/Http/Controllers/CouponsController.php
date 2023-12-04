<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponsController extends Controller
{
    public function coupons()
    {
        //Recoge todos los elementos de la tabla coupons
        $coupons = Coupon::all();


        //Los manda al front con el compact('coupons')
        return view('coupons', compact('coupons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addCouponCode' => 'required|string|size:10',
            'addDiscount' => 'required|numeric|min:1',
            'addExpirationDate' => 'required|date|after:today',
        ]);

        //Crea un nuevo cupon
        $coupons = new Coupon();

        //insert con los nombres de los inputs del modal agregar
        $coupons->coupon_code = $request->addCouponCode;
        $coupons->discount = $request->addDiscount;
        $coupons->expiration_date = $request->addExpirationDate;

        $coupons->save();

        return redirect()->route('coupons');
    }

    //comunica id con el front
    public function edit($id)
    {
        $coupons = coupon::find($id);

        return view('coupons', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editCouponCode' => 'required|string|size:10',
            'editDiscount' => 'required|numeric|min:1',
            'editExpirationDate' => 'required|date|after:today',
        ]);

        //Busca el cupon por ID
        $coupons = coupon::find($id);

        //Actualiza los datos del cupon
        $coupons->coupon_code = $request->editCouponCode;
        $coupons->discount = $request->editDiscount;
        $coupons->expiration_date = $request->editExpirationDate;


        //Guarda los registros
        $coupons->save();

        return redirect()->route('coupons');
    }

    public function destroy($id)
    {
        //Busca el cupon por ID
        $coupons = coupon::find($id);

        //Borra el cupon
        $coupons->delete();

        return redirect()->route('coupons');
    }
}
