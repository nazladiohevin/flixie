@extends('admin.layouts.main-admin')

@section('tab-title')
  Edit Transaksi
@endsection

@section('content')
  <div class="container p-4 w-[600px]">
    <h1 class="text-4xl font-bold text-black mb-4">Edit Transaksi</h1>

    <div class="bg-white p-4 rounded shadow-md">
      <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
          <label for="user" class="block text-gray-700 text-sm font-bold mb-2">User Name:</label>
          <input type="text" id="user" name="user" value="{{ $transaction->user->name }}" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
        </div>

        <div class="mb-6">
          <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
          <select id="status" name="status" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $transaction->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ $transaction->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
          </select>
        </div>

        <div class="flex items-center justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">
            Update
          </button>
          <a href="{{ route('transaction.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
            Cancel
          </a>
        </div>
      </form>
    </div>
  </div>
@endsection
