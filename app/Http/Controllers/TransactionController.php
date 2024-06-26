<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        
        $userId = auth()->user()->id;
        $userModel = new User();
        $transactions = $userModel->getTransactions($userId, "pending")->get();
        
        return view("myfilm", compact("transactions"));
    }
}
