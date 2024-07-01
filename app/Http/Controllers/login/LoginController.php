<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the email and password are for the hardcoded admin
        if ($request->email === 'admin@gmail.com' && $request->password === 'admin') {
            // Manually log in the admin without checking the database
            $admin = User::firstOrCreate(
                ['email' => 'admin@gmail.com'],
                ['name' => 'Admin', 'password' => bcrypt('admin'), 'role' => 'admin']
            );

            Auth::login($admin, $request->filled('remember'));

            return redirect()->intended($this->redirectTo);
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'], $request->remember)) {
            // If successful, then redirect to their intended location
            return redirect()->intended($this->redirectTo);
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records or you do not have admin access.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
