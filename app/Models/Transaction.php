<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ["id"];

    // Relationship with TransactionDetail
    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class, "transaction_id");
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}