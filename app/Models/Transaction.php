<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $guarded = ["id"];
    protected $with = ["transaction_details"];

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
