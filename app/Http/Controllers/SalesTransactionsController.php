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
    public function index(Request $request)
    {
        // Start the query builder with the necessary relationships
        $sTransactionsQuery = SalesTransactions::with('customer');

        // Apply search filter if there is a search query
        if ($request->has('search')) {
            $search = $request->get('search');
            $sTransactionsQuery->where(function ($query) use ($search) {
                $query->where('Tanggal', 'like', '%' . $search . '%')
                    ->orWhere('TotalHarga', 'like', '%' . $search . '%')
                    ->orWhereHas('customer', function ($q) use ($search) {
                        $q->where('Nama', 'like', '%' . $search . '%')
                            ->orWhere('Alamat', 'like', '%' . $search . '%');
                    });
            });
        }

        // Retrieve the filtered data
        $sTransactions = $sTransactionsQuery->get();
        $customer = Customers::all();

        // Return the view with the data
        return view('pages.sales_transactions', compact('sTransactions', 'customer'));
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
