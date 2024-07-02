<?php

namespace App\Http\Controllers;

use App\Models\PurchasedFilm;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        
        $userId = auth()->user()->id;
        $userModel = new User();
        
        $transactions = $userModel->getTransactions($userId, "pending")->get();
        $userId = auth()->check() ? auth()->user()->id : 0;
        $myFilms = PurchasedFilm::all()->where("user_id", $userId);
        
        return view("myfilm", compact("transactions", "myFilms"));
    }
}
