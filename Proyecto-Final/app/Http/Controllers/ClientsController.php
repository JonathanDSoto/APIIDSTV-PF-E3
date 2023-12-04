<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function clients()
    {
        $clients = Client::all();

        return view('clients', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'addLastName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'addEmail' => 'required|email|unique:clients,email',
            'addPhone' => 'required|digits:10',
        ]);

        //Crea un nuevo cliente
        $clients = new Client();

        //insert con los nombres de los inputs del modal agregar
        $clients->name = $request->addName;
        $clients->last_name = $request->addLastName;
        $clients->email = $request->addEmail;
        $clients->phone = $request->addPhone;

        $clients->save();

        return redirect()->route('clients');
    }

    //comunica id con el front
    public function edit($id)
    {
        $clients = Client::find($id);

        return view('clients', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'editLastName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'editEmail' => 'required|email|unique:clients,email,' . $id,
            'editPhone' => 'required|digits:10',
        ]);

        //Busca el usuario por ID
        $clients = Client::find($id);

        //Actualiza los datos del cliente
        $clients->name = $request->editName;
        $clients->last_name = $request->editLastName;
        $clients->email = $request->editEmail;
        $clients->phone = $request->editPhone;

        //Guarda los registros
        $clients->save();

        return redirect()->route('clients');
    }

    public function destroy($id)
    {
        //Busca el cliente por ID
        $clients = Client::find($id);

        //Borra el cliente
        $clients->delete();

        return redirect()->route('clients');
    }
}
