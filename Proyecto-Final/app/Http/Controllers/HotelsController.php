<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function hotels()
    {
        return view('hotels');
    }
}
