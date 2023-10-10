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

Route::get('/', function () {
    return view('welcome');
    //return Inertia\Inertia::render('create');
});

Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers_index');

Route::get('/customers/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers_create');
Route::post('/customers/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers_store');