<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class HotelsController extends Controller
{
    public function hotels()
    {
        //recoge todos los elementos de la tabla hotel
        $hotels =  Hotel::all();

        //los manda al front con el compact('hotels')
        return view('hotels', compact('hotels'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'addName' => 'required|string|max:255',
            'addAddress' => 'required|string|max:255',
            'addDescription' => 'required|string',
            'addImage' => 'required|url',
        ]);

        // Subir la imagen al servidor
        // $imagePath = $request->file('addImage')->store('public/uploads');
        // $url = Storage::url($imagePath);

        // Crear una nueva instancia del modelo Hotel
        $hotels = new Hotel();

        // Insertar datos en la instancia del modelo
        $hotels->name = $request->addName;
        $hotels->address = $request->addAddress;
        $hotels->description = $request->addDescription;
        $hotels->image = $request->addImage;

        $hotels->save();

        // Redireccionar a la página de hoteles
        return redirect()->route('hotels');
    }


    //comunica id con el front
    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('hotels', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        //validacion de datos
        $request->validate([
            'editName'=> 'required|string|max:255',
            'editAddress'=> 'required|string|max:255',
            'editDescription'=> 'required|string',
            'editImage'=> 'required|url',
        ]);

        // $imagePath = $request->file('editImage')->store('public/uploads');
        // $url = Storage::url($imagePath);

        //busca en la base de datos el id que coincide con el registro seleccionado
        $hotel = Hotel::find($id);

        //hace un update con los nombres de los inputs del modal editar
        $hotel->name = $request->editName;
        $hotel->address = $request->editAddress;
        $hotel->description = $request->editDescription;
        $hotel->image = $request->editImage;
        
        //guarda los registros
        $hotel->save();
        //recarga la pagina
        return redirect()->route('hotels');
    }

    public function destroy(Request $request, $id)
{
    $hotel = Hotel::find($id);

    if ($hotel) {
        if ($hotel->delete()) {
            User::where('name_hotel', $hotel->name)->delete();
            Room::where('hotel_name', $hotel->name)->delete();

            return redirect()->route('hotels')->with('success', 'Hotel eliminado exitosamente.');
        } else {
            return redirect()->route('hotels')->with('error', 'No se pudo eliminar el hotel.');
        }
    } else {
        return redirect()->route('hotels')->with('error', 'Hotel no encontrado.');
    }
}


}