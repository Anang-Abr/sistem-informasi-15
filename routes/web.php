<?php

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

Route::get('/', function () {
    return view('index');
});
Route::resource('/customer', CustomerController::class)->name('ALL','invoice');
Route::resource('/invoice', InvoiceController::class);
Route::get('supply/search', [SupplyController::class, 'search']);
Route::resource('/supply', SupplyController::class);

Route::get('/test', function (){
    $dataInvoice = Invoice::with(["customer", "supply"])->get();
    // dd([
    //     'invoice' => $dataInvoice,
    //     'customer' => $dataInvoice[0]->Customer(),
    //     'supply' => $dataInvoice[0]->Supply(),
    // ]);
    return response()->json([
        'invoice' => $dataInvoice,
        'customer' => $dataInvoice[0]->customer,
        'supply' => $dataInvoice[0]->supply
    ]);
});

Route::get('/Add', function () {
    return view('Add');
});
Route::get('/Login', function () {
    return view('LoginPage');
});

