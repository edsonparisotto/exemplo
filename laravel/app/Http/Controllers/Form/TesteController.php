<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class TesteController extends Controller
{
    public function all()
    {
//        $usu = new User();
//        $usu->name = 'Edson Parisotto';
//        $usu->email = 'edson@parisotto.net';
//        $usu->password = '123';
//        $usu->save();

//        $usuarios = User::where('id', '>=', 1)->first();

        $usuarios = User::all();
        return view('usuarios', [
            'users' => $usuarios
        ]);
    }

    public function show(User $user)
    {
        return view('usuario', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.all');
    }

    public function edit(User $user)
    {
        return view('editar', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email;
        }

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('users.all');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.all');
    }
}
