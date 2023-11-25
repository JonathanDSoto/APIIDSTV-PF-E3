<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function reservations()
    {
        return view('reservations');
    }
}
