<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
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

            if ($user->role === "admin") {
                return redirect("/flixie-admin/dashboard");
            } else {
                Auth::logout();
                return back()->with("loginError", "Login gagal, cek email atau passwordmu!");
            }
        }

        return back()->with("loginError", "Login gagal, cek email atau passwordmu!")->withInput();
    }
}
