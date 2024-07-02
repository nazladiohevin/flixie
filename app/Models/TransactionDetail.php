<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionDetail extends Model
{
    use HasFactory;        

    protected $guarded = ["id"];

    public static function deleteBy($transactionId, $filmId){
        return DB::statement('DELETE FROM transaction_details WHERE transaction_id = ? AND film_id = ?', [$transactionId, $filmId]);
    }

    // Relationship with Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
