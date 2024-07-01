@extends('admin.layouts.main-admin')

@section('tab-title')
  Detail Transaksi
@endsection

@section('content')
  <div class="container p-4">
    <h1 class="text-4xl font-bold text-black mb-4">Detail Transaksi</h1>

    <div class="bg-white p-4 rounded shadow-md">
        <div class="mb-4">
            <label class="font-bold">ID:</label>
            <p>{{ $transaction->id }}</p>
        </div>
        <div class="mb-4">
            <label class="font-bold">User Name:</label>
            <p>{{ $transaction->user->name }}</p>
        </div>
        <div class="mb-4">
            <label class="font-bold">Status:</label>
            <p>{{ $transaction->status }}</p>
        </div>
        <div class="mb-4">
            <label class="font-bold">Created At:</label>
            <p>{{ $transaction->created_at->format('d-m-Y H:i:s') }}</p>
        </div>
        <div class="mb-4">
            <label class="font-bold">Updated At:</label>
            <p>{{ $transaction->updated_at->format('d-m-Y H:i:s') }}</p>
        </div>
        <a href="{{ route('admin.transactions.edit', $transaction->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded inline-block mb-2">Edit</a>
        <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" class="inline" id="delete-form-{{ $transaction->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="confirmDelete(event, '{{ $transaction->id }}')">Hapus</button>
        </form>
        <a href="{{ route('admin.transactions.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
    </div>
  </div>

  <script>
    function confirmDelete(event, id) {
      if (!confirm('Apakah Anda yakin ingin menghapus transaksi ini?')) {
        event.preventDefault(); // Mencegah pengiriman form
      }
    }
  </script>
@endsection
