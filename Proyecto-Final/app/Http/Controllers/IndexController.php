<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Room;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $hotels =  Hotel::all();
        $rooms =  Room::all();

        return view('index', compact('hotels', 'rooms'));
    }
}