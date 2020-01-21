<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function listUser()
  {
    // $user = new User();
    // $user->name = 'Lucas Flaquer';
    // $user->email = 'lucas.flaquer@gmail.com';
    // $user->password = Hash::make('123');
    // $user->save();

    $user = User::where('id', 1)->first();
    // dd($user);
    return view('listUser', [
      'user' => $user
    ]);
  }
}
