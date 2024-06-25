<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index
    public function index()
    {
        // total transaksi status failed
        $total_completed = Transaction::where('status', 'completed')->count();
        // total transaksi status pending
        $total_pending = Transaction::where('status', 'pending')->count();
        // total transaksi status failed
        $total_failed = Transaction::where('status', 'failed')->count();
        // total film kategori movie
        $total_movie = Film::where('film_category_id', 1)->count();
        // total film kategori tv series
        $total_tv_series = Film::where('film_category_id', 2)->count();
        $data = [
            'total_completed' => $total_completed,
            'total_pending' => $total_pending,
            'total_failed' => $total_failed,
            'total_tv_series' => $total_tv_series,
            'total_movie' => $total_movie,
        ];
        return view('admin.index', compact('data'));
    }
}
