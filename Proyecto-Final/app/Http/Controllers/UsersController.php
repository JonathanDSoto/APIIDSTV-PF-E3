<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function users()
    {
        //Recoge todos los elementos de la tabla users
        $users = User::all();

        //Los manda al front con el compact('users')
        return view('users', compact('users'));
    }

    public function store(Request $request)
    {
        //Crea un nuevo usuario
        $user = new User();

         //insert con los nombres de los inputs del modal agregar
        $user->name = $request->editName;
        $user->last_name = $request->editLastName;
        $user->email = $request->editEmail;
        $user->password = bcrypt($request->editPassword); 
        $user->role = $request->editRole;
        $user->curp = $request->editCurp;
        $user->hotels = $request->editHotels;

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
        //Busca el usuario por ID
        $user = User::find($id);

        //Actualiza los dataos del usuario
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->curp = $request->input('curp');
        $user->hotels = $request->input('hotels');

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
