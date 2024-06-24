<?php

namespace App\Http\Controllers;

use App\Models\SalesTransactions;
// use App\Models\SalesTransactions;
use App\Models\Customers;
use Illuminate\Http\Request;

class SalesTransactionsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sTransactions = SalesTransactions::with('customer')->get();
        $customer = Customers::all();
        // dd($pTransactions);
        return view('pages/sales_transactions', compact('sTransactions', 'customer'));
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Tanggal' => 'required',
                'TotalHarga' => 'required',
                'CustomerID' => 'required',
            ]);

            SalesTransactions::create($validatedData);

            return redirect()->back()->with('success', 'Data Penjualan Barang Berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Penjualan Barang Gagal ditambahkan.');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'Tanggal' => 'required',
                'TotalHarga' => 'required',
                'CustomerID' => 'required',
            ]);

            $sales = SalesTransactions::findOrFail($id);
            $sales->update($validatedData);

            return redirect()->back()->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            SalesTransactions::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Item Gagal dihapus.');
        }
    }
}
