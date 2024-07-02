<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with(["transaction_details", "user"])->get();
        // @dd($transactions);
        return view("admin.transaction.index", compact("transactions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.transaction.show', compact('transaction'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.transaction.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|string',            
        ]);

        $transaction = Transaction::findOrFail($id);        
        $transaction->update([            
            'status' => $request->status,            
        ]);
    
        return redirect()->route('transaction.index')->with('success', 'Berhasil update transaksi dari' . $request->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $transaction_id)
    {
        $transaction = Transaction::findOrFail($transaction_id);
        $transaction->delete();
        TransactionDetail::where("transaction_id", $transaction_id)->delete();
        
        return redirect()->route('transaction.index')->with('success', "Berhasil menghapus transaksi");
    }
}
