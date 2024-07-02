@extends('admin.layouts.main-admin')
@section('tab-title')
    Tambah User - Admin
@endsection
@section('content')
  <section class="max-w-xl">
    <h1 class="text-3xl font-semibold text-black mb-6">Buat User Baru</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Name</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Username</label>
            <input type="text" name="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-600 font-medium mb-2">Password</label>
          <input type="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-600 font-medium mb-2">Role</label>
            <select name="role" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                <option value="admin">Admin</option>
                <option value="member">Member</option>
            </select>
        </div>
        <button type="submit" class="w-max bg-blue-500 text-white py-2 px-5 rounded-lg hover:bg-blue-600 transition-colors">Buat User Baru</button>
    </form>
  </section>
@endsection
