<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionDetail extends Model
{
    use HasFactory;        

    protected $fillable = ['transaction_id', 'film_id'];

    public static function deleteBy($transactionId, $filmId){
        return DB::statement('DELETE FROM transaction_details WHERE transaction_id = ? AND film_id = ?', [$transactionId, $filmId]);
    }
}
