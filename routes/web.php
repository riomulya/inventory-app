<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\IncomingProductController;
use App\Http\Controllers\OutgoingProductController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PurchaseTransactionsController;
use App\Http\Controllers\ScheduleProductController;
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

Route::get('/product', [ItemsController::class, 'index'])->name('items.index');

Route::post('/product', [ItemsController::class, 'store'])->name('items.store');

Route::put('/products/{id}', [ItemsController::class, 'update'])->name('items.update');

Route::delete('/products/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');

Route::get('/purchase-transaction', [PurchaseTransactionsController::class, 'index']);

Route::get('/supplier', [SuppliersController::class, 'index'])->name('suppliers.index');

Route::post('/supplier', [SuppliersController::class, 'store'])->name('suppliers.store');

Route::delete('/suppliers/{supplier}', [SuppliersController::class, 'destroy'])->name('suppliers.destroy');

Route::put('/suppliers/{id}', [SuppliersController::class, 'update'])->name('suppliers.update');

Route::get("/incoming", [IncomingProductController::class, 'index'])->name('incoming.index');
Route::post("/incoming/insert", [IncomingProductController::class, 'store'])->name('incoming.store');
Route::put('/incoming/{id}/update', [IncomingProductController::class, 'update'])->name('incoming.update');
Route::delete('/incoming/{id}/delete', [IncomingProductController::class, 'destroy'])->name('incoming.destroy');

Route::get("/outgoing", [OutgoingProductController::class, 'index'])->name('outgoing.index');
Route::post("/outgoing/insert", [OutgoingProductController::class, 'store'])->name('outgoing.store');
Route::put('/outgoing/{id}/update', [OutgoingProductController::class, 'update'])->name('outgoing.update');
Route::delete('/outgoing/{id}/delete', [OutgoingProductController::class, 'destroy'])->name('outgoing.destroy');


Route::get("/outgoing", [OutgoingProductController::class, 'index'])->name('outgoing.index');
Route::delete('/outgoing/{incomming}', [OutgoingProductController::class, 'destroy'])->name('outgoing.destroy');
