<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms()
    {
        return view('rooms');
    }
}
