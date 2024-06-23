<?php

namespace App\Http\Controllers;

use App\Models\PurchaseTransactions;
use Illuminate\Http\Request;

class PurchaseTransactionsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pTransactions = PurchaseTransactions::with('suppliers')->get();
        // dd($pTransactions);
        return view('pages/purchase_transactions', compact('pTransactions'));
    }
}
