<?php

namespace App\Http\Controllers;

use App\Models\IncomingItems;
use App\Models\Items;
use App\Models\OutgoingItems;
use App\Models\PurchaseTransactions;
use App\Models\SalesTransactions;
use Illuminate\Http\Request;

class IncomingProductController extends Controller
{
    public function index()
    {
        $incoming = IncomingItems::with('purchaseTransaction', 'salesTransaction', 'item')->get();
        $outgoing = OutgoingItems::with('purchaseTransaction', 'salesTransaction', 'item')->get();
        $items = Items::all();
        $purchase = PurchaseTransactions::with('supplier')->get();
        $sales = SalesTransactions::with('customer')->get();

        return view('pages.incoming_product', compact('outgoing', 'incoming', 'items', 'purchase', 'sales'));
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

            $incoming = IncomingItems::create($validatedData);

            return redirect()->route('incoming.index')->with('success', 'Data Barang Masuk Berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('incoming.index')->with('error', 'Data Barang Masuk Gagal ditambahkan.');
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

            $incoming = IncomingItems::findOrFail($id);
            $incoming->update($validatedData);

            return redirect()->route('incoming.index')->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('incoming.index')->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            IncomingItems::findOrFail($id)->delete();
            return redirect()->route('incoming.index')->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('incoming.index')->with('error', 'Item Gagal dihapus.');
        }
    }
}
