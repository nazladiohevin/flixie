<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index');
  }

  public function store(Request $request) {
    $validatedData = $request->validate([
      "email" => "required|email:dns|unique:users,email",
      "username" => "required|min:5|max:50",
      "name" => "required|min:5|max:100",
      "password" => "required|min:5|max:12|confirmed"
    ], [
      'password.confirmed' => 'Konfirmasi password tidak cocok.',
    ]);         
    
    $user = User::create([
      "email" => $validatedData["email"],
      "username" => $validatedData["username"],
      "name" => $validatedData["name"],
      "password" => Hash::make($validatedData["password"]),
      "role" => "member",      
    ]);

    Auth::login($user);

    return redirect()->intended("/");
  }
}
