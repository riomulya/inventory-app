<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\OutgoingItems;
use App\Models\IncomingItems;
use App\Models\PurchaseTransactions;
use App\Models\SalesTransactions;
use Illuminate\Http\Request;

class OutgoingProductController extends Controller
{
    public function index()
    {
        $incoming = IncomingItems::with('purchaseTransaction', 'salesTransaction', 'item')->get();
        $outgoing = OutgoingItems::with('purchaseTransaction', 'salesTransaction', 'item')->get();
        $items = Items::all();
        $purchase = PurchaseTransactions::with('supplier')->get();
        $sales = SalesTransactions::with('customer')->get();

        return view('pages.outgoing_product', compact('outgoing', 'incoming', 'items', 'purchase', 'sales'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'TransaksiID' => 'required',
                'SalesTransaksiID' => 'required',
                'ItemID' => 'required',
                'Jumlah' => 'required',
                'HargaPerItem' => 'required',
                'Tanggal' => 'required',
            ]);

            OutgoingItems::create($validatedData);

            return redirect()->route('outgoing.index')->with('success', 'Data Barang Keluar Berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('outgoing.index')->with('error', 'Data Barang Keluar Gagal ditambahkan.');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'TransaksiID' => 'required',
                'SalesTransaksiID' => 'required',
                'ItemID' => 'required',
                'Jumlah' => 'required',
                'HargaPerItem' => 'required',
                'Tanggal' => 'required',
            ]);

            $incoming = OutgoingItems::findOrFail($id);
            $incoming->update($validatedData);

            return redirect()->route('outgoing.index')->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('outgoing.index')->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            OutgoingItems::findOrFail($id)->delete();
            return redirect()->route('outgoing.index')->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('outgoing.index')->with('error', 'Item Gagal dihapus.');
        }
    }
}
