<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    public function rooms()
    {
        //Recoge todos los elementos de la tabla rooms
        $rooms = Room::all();
        $hotels = Hotel::all();


        //Los manda al front con el compact('rooms')
        return view('rooms', compact('rooms', 'hotels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addImage' => 'required|url',
            'addNameRoom' => 'required|string|max:255',
            'addDescription' => 'required|string|',
            'addState'=> 'required|string',
            'addHotelName'=> 'required|string|max:255'
        ]);

        // $imagePath = $request->file('addImage')->store('public/rooms');
        // $url = Storage::url($imagePath);

        //Crea una nueva habitacion
        $rooms = new Room();

        //insert con los nombres de los inputs del modal agregar
        $rooms->image = $request->addImage;
        $rooms->name_room = $request->addNameRoom;
        $rooms->description = $request->addDescription;
        $rooms->state = $request->addState;
        $rooms->hotel_name = $request->addHotelName;

        $rooms->save();

        return redirect()->route('rooms');
    }

    //comunica id con el front
    public function edit($id)
    {
        $rooms = Room::find($id);

        return view('rooms', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editImage'=> 'required|url',
            'editNameRoom' => 'required|string|max:255',
            'editDescription' => 'required|string|',
            'editState'=> 'required|string',
            'editHotelName'=> 'required|string|max:255'
        ]);

        // $imagePath = $request->file('editImage')->store('public/uploads');
        // $url = Storage::url($imagePath);
        //Busca la habitacion por ID
        $rooms = Room::find($id);

        //Actualiza los datos de la habitacion
        $rooms->image = $request->editImage;
        $rooms->name_room = $request->editNameRoom;
        $rooms->description = $request->editDescription;
        $rooms->state = $request->editState;
        $rooms->hotel_name = $request->editHotelName;


        //Guarda los registros
        $rooms->save();

        return redirect()->route('rooms');
    }

    public function destroy($id)
    {
        //Busca la habitacion por ID
        $rooms = Room::find($id);

        //Borra la habitacion
        $rooms->delete();

        return redirect()->route('rooms');
    }
}