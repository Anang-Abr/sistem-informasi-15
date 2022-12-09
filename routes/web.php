<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplyController;
use App\Models\Invoice;

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

Route::get('/register', function () {
    return view('register');
})->middleware('guest');
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::get('/', function () {
    return view('index');
});
Route::delete('/logout', [AuthController::class, 'logout']);
Route::post('/register',[AuthController::class, 'register'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::resource('/customer', CustomerController::class);
Route::resource('/invoice', InvoiceController::class);
Route::resource('/supply', SupplyController::class);
Route::get('supply/search', [SupplyController::class, 'search']);