<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;

class UsersController extends Controller
{
    public function users()
    {
        //Recoge todos los elementos de la tabla users
        $users = User::all();
        $hotels = Hotel::all();

        //Los manda al front con el compact('users')
        return view('users', compact('users', 'hotels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'addLastName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'addEmail' => 'required|email|unique:users,email',
            'addPassword' => 'required|string|min:8|max:100',
            'addNameHotel' => 'required|string|max:255'
        ]);

        //Crea un nuevo usuario
        $user = new User();

        //insert con los nombres de los inputs del modal agregar
        $user->name = $request->addName;
        $user->last_name = $request->addLastName;
        $user->email = $request->addEmail;
        $user->password = bcrypt($request->addPassword);
        $user->name_hotel = $request->addNameHotel;

        $user->save();

        return redirect()->route('users');
    }

    //comunica id con el front
    public function edit($id)
    {
        $user = User::find($id);

        return view('users', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'editLastName' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/|max:255',
            'editEmail' => 'required|email|unique:users,email,' . $id,
            'editPassword' => 'required|string|min:8|max:100',
            'editNameHotel' => 'required|string|max:255'
        ]);

        //Busca el usuario por ID
        $user = User::find($id);

        //Actualiza los dataos del usuario
        $user->name = $request->editName;
        $user->last_name = $request->editLastName;
        $user->email = $request->editEmail;
        $user->name_hotel = $request->editNameHotel;

        //Guarda los registros
        $user->save();

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        //Busca el usuario por ID
        $user = User::find($id);

        //Borra el usuario
        $user->delete();

        return redirect()->route('users');
    }
}
