<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Film;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index(){
        $films = Film::latest();

        return new TransactionResource(true, "List Film", $films);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            "id" => "required|not_in:0",            
            "film_id" => "required",            
        ]);
        
        
        if ($validator->fails()) {
            return new TransactionResource(false, "Login terlebih dahulu!", true);
        }    
        
        $userId = $request->id;
        // return new TransactionResource(true, "List Film", $userId);
        $alreadyTransaction = Transaction::where("user_id", $userId)
            ->where("status", "pending")
            ->exists();
        
        $transactionId = 0;
        if (!$alreadyTransaction) {
            $transaction = Transaction::create([
                "user_id" => $userId,
                "status" => "pending"            
            ]);            

            $transactionId = $transaction->id;
        } else  {
            $transactionId = Transaction::where("user_id", $userId)
                ->where("status", "pending")->first()->id;
        }
        
        $isFilmInCart = TransactionDetail::where("transaction_id", $transactionId)
            ->where("film_id", $request->film_id)
            ->exists();
        
        // Cek jika sudah memasukkan ke keranjang belanja yang statusnya masih fulfilled
        if ($isFilmInCart) {
            return new TransactionResource(false, "Film sudah berada di keranjang belanja", $isFilmInCart);
        }
                
        TransactionDetail::create([
            "transaction_id" => $transactionId,
            "film_id" => $request->film_id
        ]);

        return new TransactionResource(true, "Berhasil menambahkan di keranjang belanja, silahkan melakukan checkout pembayaran", true);
    }

    public function destroy($id)
    {        
        [$transactionId, $filmId] = explode('_', $id);     
        $transaction = Transaction::find($transactionId);
        
        // transaction tidak ditemukan
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
                
        $transactionDetail = TransactionDetail::where('transaction_id', $transactionId)
        ->where('film_id', $filmId)
        ->first();
        
        // Transaction detail tidak ditemukan
        if (!$transactionDetail) {
            return response()->json(['message' => 'Transaction detail not found'], 404);
        }
        
        // Menghapus transaction detail        
        TransactionDetail::deleteBy($transactionId, $filmId);        
        
        // Cek apakah masih ada detail transaksi yang tersisa
        if ($transaction->transaction_details()->count() === 0) {
            // Jika tidak ada detail transaksi yang tersisa, ubah status transaksi menjadi 'failed'
            $transaction->status = 'failed';
            $transaction->save();
        }

        // Kembalikan respon sukses
        return new TransactionResource(true, 'Transaction detail deleted successfully!', true);
    }

    public function show() {
        
    }

}
