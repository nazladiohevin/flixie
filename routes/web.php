<?php

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

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/tv-series', function () {
    return view('tv-series');
})->name("tv-series");

Route::get('/myfilm', function () {
    return view('myfilm');
})->name("myfilm");

/**
 * 
 * DASHBOARD ADMIN
 * 
 */

Route::get('/flixie-admin', function () {
    return view('admin.login.index');
})->name("login-admin");

Route::get('/flixie-admin/dashboard', function () {
    return view('admin.index');
})->name("home-admin");

Route::get('/flixie-admin/dashboard/user', function () {
    return view('admin.user');
})->name("userpage");

Route::get('/flixie-admin/dashboard/film', function () {
    return view('admin.film');
})->name("film");

Route::get('/flixie-admin/dashboard/transaction', function () {
    return view('admin.transaction');
})->name("transaction");
