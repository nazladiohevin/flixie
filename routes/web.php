<?php

use App\Http\Controllers\admin\AdminFilmController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\register\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\AdminTransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * 
 * FRONTEND
 * 
 */

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get("films/{film:slug}", [FilmController::class, "content"]);


Route::get('/about', function () { return view('about'); })->name("about");
Route::get('/movies', function () { return view('movies');})->name("movies");
Route::get('/tv-series', function () { return view('tv-series'); })->name("tv-series");


Route::middleware(["purchased"])->group(function() {
    // Client
    Route::get("films/{film:slug}/vidio", [FilmController::class, "play_movie"]);    
    Route::get("films/{film:slug}/{season}/{episode}", [FilmController::class, "play_tv"]);    
});

Route::middleware(["auth"])->group(function() {
    // Client    
    Route::get('/myfilm', [TransactionController::class, "index"])->name("myfilm");
});

Route::middleware(["guest"])->group(function() {
    // Client
    Route::get("/login", [LoginController::class, "index"])->name("login");    
    Route::get("/register", [RegisterController::class, "index"])->name("register");    
});

/**
 * Login & Register
 */

Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LogoutController::class, "index"]);
Route::post("/register", [RegisterController::class, "store"]);

/**
 * 
 * DASHBOARD ADMIN
 * 
 */

Route::get('/flixie-admin', function () {
    return view('admin.login.index');
})->name("login-admin");

Route::get('/flixie-admin/dashboard', [DashboardController::class, 'index'])->name("home-admin");

Route::get('/flixie-admin/dashboard/user', function () {
    return view('admin.user');
})->name("userpage");

Route::get('/flixie-admin/dashboard/film', function () {
    return view('admin.film');
})->name("film");

Route::get('/flixie-admin/dashboard/transaction', function () {
    return view('admin.transaction');
})->name("transaction");

Route::resource("/flixie-admin/dashboard/film", AdminFilmController::class);
Route::resource("/flixie-admin/dashboard/transaction", AdminTransactionController::class);
