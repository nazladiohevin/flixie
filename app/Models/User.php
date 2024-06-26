<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id');
    }

    public function getTransactions($userId, $status = "pending")
    {        
        $transactions = $this
            ->leftJoin('transactions', 'transactions.user_id', '=', 'users.id')
            ->leftJoin('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
            ->leftJoin('films', 'films.id', '=', 'transaction_details.film_id')
            ->leftJoin('film_categories', 'film_categories.id', '=', 'films.film_category_id')
            ->where('users.id', $userId)
            ->where('transactions.status', $status)
            ->select('transactions.*', 'transaction_details.*', "films.*", "film_categories.name");            ;

        return $transactions;
    }
    
}
