<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::orderBy('id', 'desc')->paginate(9);

        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->rol = $request->rol;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.show', $user);
    }

    public function show(User $user){

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user){

        return view('admin.users.edit', compact('user'));

    }

    public function update(Request $request, User $user){

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->rol = $request->rol;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.show', $user);

    }

    public function destroy(User $user){

        $user->delete();

        return redirect()->route('users.index');

    }

}
