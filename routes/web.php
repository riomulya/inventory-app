<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PurchaseTransactionsController;
use App\Http\Controllers\SuppliersController;
use App\Models\Customers;
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
    return view('index');
});


Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/customer', [CustomersController::class, 'index'])->name('customers.index');
Route::post('/customer', [CustomersController::class, 'store'])->name('customers.store');

Route::delete('/customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy');

Route::put('/customers/{id}', [CustomersController::class, 'update'])->name('customers.update');


Route::get('/product', [ItemsController::class, 'index']);

Route::get('/purchase-transaction', [PurchaseTransactionsController::class, 'index']);

Route::get('/supplier', [SuppliersController::class, 'index'])->name('suppliers.index');

Route::post('/supplier', [SuppliersController::class, 'store'])->name('suppliers.store');

Route::delete('/suppliers/{supplier}', [SuppliersController::class, 'destroy'])->name('suppliers.destroy');

Route::put('/suppliers/{id}', [SuppliersController::class, 'update'])->name('suppliers.update');
