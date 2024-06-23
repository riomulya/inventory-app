<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Items::all();
        $totalStok = Items::sum('JumlahStok');

        // dd($items);
        return view('pages/product', compact('items', 'totalStok'));
    }
}
