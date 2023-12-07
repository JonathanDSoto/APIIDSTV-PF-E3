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

    public function edit($id)
    {
        $room = Room::find($id);
        return view('index', compact('rooms'));
    }

    public function update(Request $request, $id)
    {

        $room = Room::find($id);
        $room->state = $request->editState;

        $room->save();

        return redirect()->route('index');
    }

}