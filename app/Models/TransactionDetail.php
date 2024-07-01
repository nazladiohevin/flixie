<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $guarded = ["id"];

    // Relationship with Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
