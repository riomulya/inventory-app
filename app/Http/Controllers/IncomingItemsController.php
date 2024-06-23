<?php

namespace App\Http\Controllers;

use App\Models\IncomingItems;
use Illuminate\Http\Request;

class IncomingItemsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $IncomingItems = IncomingItems::all();

        // dd($items);
        return view('pages/IncomingItems', compact('IncomingItems'));
    }
}
