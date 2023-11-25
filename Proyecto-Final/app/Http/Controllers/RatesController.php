<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatesController extends Controller
{
    public function rates()
    {
        return view('rates');
    }
}
