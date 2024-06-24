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
    public function index(Request $request)
    {
        // $incomingQuery = IncomingItems::with('purchaseTransaction.supplier', 'salesTransaction.customer', 'item');
        $outgoingQuery = OutgoingItems::with('purchaseTransaction.supplier', 'salesTransaction.customer', 'item');

        if ($search = $request->input('search')) {
            // $incomingQuery->whereHas('item', function ($query) use ($search) {
            //     $query->where('ItemID', 'like', '%' . $search . '%');
            // })->orWhereHas('purchaseTransaction.supplier', function ($query) use ($search) {
            //     $query->where('TransaksiID', 'like', '%' . $search . '%');
            // })->orWhereHas('salesTransaction.customer', function ($query) use ($search) {
            //     $query->where('SalesTransaksiID', 'like', '%' . $search . '%');
            // });

            $outgoingQuery->whereHas('item', function ($query) use ($search) {
                $query->where('ItemID', 'like', '%' . $search . '%');
            })->orWhereHas('purchaseTransaction.supplier', function ($query) use ($search) {
                $query->where('TransaksiID', 'like', '%' . $search . '%');
            })->orWhereHas('salesTransaction.customer', function ($query) use ($search) {
                $query->where('SalesTransaksiID', 'like', '%' . $search . '%');
            });
        }

        // $incoming = $incomingQuery->get();
        $outgoing = $outgoingQuery->get();
        $items = Items::all();
        $purchase = PurchaseTransactions::with('supplier')->get();
        $sales = SalesTransactions::with('customer')->get();

        return view('pages.outgoing_product', compact('outgoing', 'items', 'purchase', 'sales'));
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
