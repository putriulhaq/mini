<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestsControllers;
use App\Http\Controllers\TransactionsControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('sb-admin/app');
});

Route::get('/guest', [GuestsControllers::class,'index'])->name('guest');
Route::get('/EditGuest/{id}', [GuestsControllers::class,'EditGuest'])->name('EditGuest');
Route::put('/UpdateGuest/{id}', [GuestsControllers::class,'UpdateGuest'])->name('UpdateGuest');
Route::get('/DeleteGuest/{id}', [GuestsControllers::class,'DeleteGuest'])->name('DeleteGuest');
Route::get('/guests-transaction', [TransactionsControllers::class,'index'])->name('guests-transaction');
Route::get('/deposite', [TransactionsControllers::class,'deposite'])->name('deposite');
Route::get('/withdrawal', [TransactionsControllers::class,'withdrawal'])->name('withdrawal');


