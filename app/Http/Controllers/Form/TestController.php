<?php

namespace App\Http\Controllers\Form;
use App\User;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers() 
    {
        $users = User::all();
        
        return view('listAllUsers', [
            'users' => $users
        ]);
    }
    public function listUsers(User $user)
    {
        return view('listUser', [
            'user' => $user
        ]);
    }
    public function formAddUser() 
    {
        return view('addUser');
    }
    public function storeUser(Request $req) 
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        
        return redirect()->route('users.listAll');
    }
    public function formEditUser() 
    {
        return view('addUser');
    }
    public function edit() 
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        
        return redirect()->route('users.listAll');
    }
}
