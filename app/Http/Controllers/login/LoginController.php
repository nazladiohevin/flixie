<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }

  public function authenticate(Request $request)
  {    
    $credentials = $request->validate([
      "email" => "required|email",
      "password" => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      $user = Auth::user();

      if ($user->role === "member") {
        return redirect()->intended("/");
      } else {
        Auth::logout();
        return back()->with("loginError", "Login gagal, cek email atau passwordmu!");
      }

    }

    return back()->with("loginError", "Login gagal, cek email atau passwordmu!")->withInput();
  }
}
