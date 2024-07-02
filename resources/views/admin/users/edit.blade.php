@extends('admin.layouts.main-admin')
@section('tab-title')
    Edits User - Admin
@endsection
@section('content')
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Username</label>
            <input type="text" name="username" value="{{ $user->username }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Password</label>
            <input type="password" name="password" value="" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-6">
            <label class="block text-gray-600 font-medium mb-2">Role</label>
            <select name="role" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="member" {{ $user->role == 'member' ? 'selected' : '' }}>Member</option>
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">Update</button>
    </form>
</div>
@endsection
