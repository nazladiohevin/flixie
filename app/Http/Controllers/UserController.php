<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy("id", "desc")->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            "username" => "required",
            "password" => "required",
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,member',
        ]);

        User::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role,
        ]);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            "username" => "required",
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,member',
        ]);

        $willUpdate = [
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,            
            "role" => $request->role,
        ];
        if ($request->password) {
            $willUpdate["password"] = bcrypt($request->password);
        }

        $user->update($willUpdate);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
