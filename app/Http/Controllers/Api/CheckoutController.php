<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CheckoutResource;
use App\Models\PurchasedFilm;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
  public function store(Request $request)
  {
      // Validasi input
      $validator = Validator::make($request->all(), [
          "id" => "required",
      ]);

      if ($validator->fails()) {
          return response()->json($validator->errors(), 422);
      }

      // Ambil user_id dari request
      $userId = $request->id;

      // Jika user_id tidak ada, beri respons dengan pesan error
      if (!$userId) {
          return new CheckoutResource(false, "Gagal get", "Error, refresh kembali browser");
      }

      // Temukan transaksi yang sedang berlangsung untuk user dengan status pending
      $transaction = Transaction::where("user_id", $userId)
          ->where("status", "pending")
          ->first();

      // Jika tidak ada transaksi yang sesuai, beri respons dengan pesan error
      if (!$transaction) {
          return new CheckoutResource(false, "Gagal get", "Transaksi tidak ditemukan");
      }

      // Ambil ID transaksi
      $transactionId = $transaction->id;

      // Ambil detail pembelian berdasarkan transaction_id
      $purchasedFilms = TransactionDetail::where("transaction_id", $transactionId)->get();

      // Siapkan data untuk disimpan di tabel PurchasedFilm
      $mappedPurchasedFilms = $purchasedFilms->map(function ($purchasedFilm) use ($userId) {
          return [
              "user_id" => $userId,
              "film_id" => $purchasedFilm->film_id,
              "created_at" => now(),
              "updated_at" => now(),
          ];
      })->toArray();

      // Simpan data ke dalam tabel PurchasedFilm
      PurchasedFilm::insert($mappedPurchasedFilms);

      // Update status transaksi menjadi completed
      $transaction->update([
          "status" => "completed"
      ]);

      // Beri respons berhasil
      return new CheckoutResource(true, "List Film", true);
  }

}
