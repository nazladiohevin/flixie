@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="" required>
        </div>
        <div>
            <label>Role</label>
            <select name="role" required>
                <option value="admin">Admin</option>
                <option value="member">Member</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
