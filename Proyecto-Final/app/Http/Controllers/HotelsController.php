<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

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
        //validacion de datos
        $request->validate([
            'addName'=> 'required|string|max:255',
            'addAddress'=> 'required|string|max:255',
            'addDescription'=> 'required|string',
            'addImage'=> 'required|url',
        ]);

        //busca en la base de datos el id que coincide con el registro seleccionado
        $hotels = new Hotel();

         //insert con los nombres de los inputs del modal agregar
        $hotels->name = $request->addName;
        $hotels->address = $request->addAddress;
        $hotels->description = $request->addDescription;
        $hotels->image = $request->addImage;

        $hotels->save();
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

        if ($this->tieneUsuariosAsociados($hotel)) {
            // Muestra un mensaje de error indicando que hay usuarios asociados
            return redirect()->route('hotels')->with('error', 'Hay usuarios vinculados a este hotel. No se puede eliminar.');
        }

        // No hay usuarios asociados, puedes eliminar directamente
        $hotel->delete();

        return redirect()->route('hotels');
    }

    private function tieneUsuariosAsociados($hotel)
    {
        return $hotel->users()->exists();
    }
}
