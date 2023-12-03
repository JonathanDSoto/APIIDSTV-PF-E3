<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rates;

class RatesController extends Controller
{
    public function rates()
    {
        $rates = Rates::all();

        return view('rates', compact('rates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addNameRate' => 'required|string|max:255',
            'addPrice' => 'decimal:0,2',
        ]);

        $rates = new Rates();

        $rates->name_rate = $request->addNameRate;
        $rates->price = $request->addPrice;

        $rates->save();

        return redirect()->route('rates');
    }

    public function edit($id)
    {
        $rates = Rates::find($id);

        return view('rates', compact('rates'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editNameRate' => 'required|string|max:255',
            'editPrice' => 'decimal:0,2',
        ]);

        $rates = Rates::find($id);

        $rates->name_rate = $request->editNameRate;
        $rates->price = $request->editPrice;

        $rates->save();

        return redirect()->route('rates');
    }

    public function destroy($id)
    {
        $rates = Rates::find($id);

        $rates->delete();

        return redirect()->route('rates');
    }
}