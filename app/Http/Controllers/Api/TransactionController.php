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
            "id" => "required",            
            "film_id" => "required",            
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Cek jika sudah memasukkan ke keranjang belanja yang statusnya masih fulfilled
        // if () {
        //     return 
        // }
        
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
                
        $transactionDetail = TransactionDetail::create([
            "transaction_id" => $transactionId,
            "film_id" => $request->film_id
        ]);

        return new TransactionResource(true, "List Film", compact("transactionDetail"));
    }

    public function destroy($id)
{
    // Memisahkan transactionId dan filmId dari input
    [$transactionId, $filmId] = explode('_', $id);
    // Mengambil transaction berdasarkan ID
    $transaction = Transaction::find($transactionId);
    
    // Jika transaction tidak ditemukan, kembalikan respon error
    if (!$transaction) {
        return response()->json(['message' => 'Transaction not found'], 404);
    }
    
    // Mengambil transaction detail berdasarkan transaction_id dan film_id
    $transactionDetail = TransactionDetail::where('transaction_id', $transactionId)
        ->where('film_id', $filmId)
        ->first();
    
    // Jika transaction detail tidak ditemukan, kembalikan respon error
    if (!$transactionDetail) {
        return response()->json(['message' => 'Transaction detail not found'], 404);
    }
    
    // Menghapus transaction detail
    // return new TransactionResource(true, 'Transaction detail deleted successfully!', compact("transactionDetail"));
    $transactionDetail->delete();

    // Cek apakah masih ada detail transaksi yang tersisa
    if ($transaction->details()->count() === 0) {
        // Jika tidak ada detail transaksi yang tersisa, ubah status transaksi menjadi 'failed'
        $transaction->status = 'failed';
        $transaction->save();
    }

    // Kembalikan respon sukses
    return new TransactionResource(true, 'Transaction detail deleted successfully!', true);
}



}
