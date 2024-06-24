<?php

namespace App\Http\Controllers;

use App\Models\SalesTransactions;
// use App\Models\SalesTransactions;
use App\Models\Customers;
use App\Models\PurchaseTransactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sTransactions = SalesTransactions::with('customer')->get();
        $pTransactions = PurchaseTransactions::with('supplier')->get();
        $customer = Customers::all();
        return view('pages.dashboard', compact('sTransactions', 'pTransactions', 'customer'));
    }
}
