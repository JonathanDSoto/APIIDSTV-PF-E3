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
        $hotels =  Hotel::all();

        //Los manda al front con el compact('users')
        return view('users', compact('users', 'hotels'));
    }

    public function store(Request $request)
    {
        //Crea un nuevo usuario
        $user = new User();

         //insert con los nombres de los inputs del modal agregar
        $user->name = $request->addName;
        $user->last_name = $request->addLastName;
        $user->email = $request->addEmail;
        $user->password = bcrypt($request->addPassword); 
        $user->role = $request->addRole;
        $user->curp = $request->addCurp;
        $user->hotels = $request->addHotels;

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
        $user->name = $request->editName;
        $user->last_name = $request->editLastName;
        $user->email = $request->editEmail;
        $user->role = $request->editRole;
        $user->curp = $request->editCurp;
        $user->hotels = $request->editHotels;

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
