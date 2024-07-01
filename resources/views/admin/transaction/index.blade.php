@extends('admin.layouts.main-admin')

@section('tab-title')
  Daftar Transaksi
@endsection

@section('content')
  <div class="container p-4">
    <h1 class="text-4xl font-bold text-black mb-4">Daftar Transaksi</h1>

    <div class="bg-white p-4 rounded shadow-md overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">User Name</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $transaction->user->name }}</td>
                    <td class="py-2 px-4">{{ $transaction->status }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('transaction.show', $transaction->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded inline-block mb-1">Detail</a>
                        <a href="{{ route('transaction.edit', $transaction->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded inline-block mb-1">Edit</a>
                        <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST" class="inline" id="delete-form-{{ $transaction->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="confirmDelete(event, '{{ $transaction->id }}')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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