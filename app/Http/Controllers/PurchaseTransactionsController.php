<?php

namespace App\Http\Controllers;

use App\Models\PurchaseTransactions;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class PurchaseTransactionsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Start the query builder with the necessary relationships
        $pTransactionsQuery = PurchaseTransactions::with('supplier');

        // Apply search filter if there is a search query
        if ($request->has('search')) {
            $search = $request->get('search');
            $pTransactionsQuery->where(function ($query) use ($search) {
                $query->where('Tanggal', 'like', '%' . $search . '%')
                    ->orWhere('TotalHarga', 'like', '%' . $search . '%')
                    ->orWhereHas('supplier', function ($q) use ($search) {
                        $q->where('Nama', 'like', '%' . $search . '%')
                            ->orWhere('Alamat', 'like', '%' . $search . '%');
                    });
            });
        }

        // Retrieve the filtered data
        $pTransactions = $pTransactionsQuery->get();
        $supplier = Suppliers::all();

        // Return the view with the data
        return view('pages.purchase_transactions', compact('pTransactions', 'supplier'));
    }



    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Tanggal' => 'required',
                'TotalHarga' => 'required',
                'SupplierID' => 'required',
            ]);

            PurchaseTransactions::create($validatedData);

            return redirect()->back()->with('success', 'Data Pembelian Barang Berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Pembelian Barang Gagal ditambahkan.');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'Tanggal' => 'required',
                'TotalHarga' => 'required',
                'SupplierID' => 'required',
            ]);

            $purchase = PurchaseTransactions::findOrFail($id);
            $purchase->update($validatedData);

            return redirect()->back()->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            PurchaseTransactions::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Item Gagal dihapus.');
        }
    }
}
