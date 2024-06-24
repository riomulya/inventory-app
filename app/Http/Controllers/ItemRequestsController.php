<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\ItemRequests;
use App\Models\Items;
use App\Models\SalesTransactions;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ItemRequestsController extends Controller
{
    public function index()
    {
        // Start the query builder with the necessary relationships
        $itemRequestsQuery = ItemRequests::with('customer', 'item');

        // Apply search filter if there is a search query
        if ($search = request('search')) {
            $itemRequestsQuery->where(function ($query) use ($search) {
                $query->where('CustomerID', 'like', '%' . $search . '%')
                    ->orWhere('ItemID', 'like', '%' . $search . '%')
                    ->orWhere('Jumlah', 'like', '%' . $search . '%')
                    ->orWhere('Tanggal', 'like', '%' . $search . '%')
                    // Filter by customer name
                    ->orWhereHas('customer', function ($q) use ($search) {
                        $q->where('Nama', 'like', '%' . $search . '%');
                    })
                    // Filter by item name
                    ->orWhereHas('item', function ($q) use ($search) {
                        $q->where('Nama', 'like', '%' . $search . '%');
                    });
            });
        }

        // Retrieve the filtered data
        $itemRequests = $itemRequestsQuery->get();

        // Retrieve all items and customers
        $items = Items::all();
        $customers = Customers::all();

        // Return the view with the data
        return view('pages.request_product', compact('items', 'customers', 'itemRequests'));
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'ItemID' => 'required',
                'CustomerID' => 'required',
                'Jumlah' => 'required',
            ]);

            $validatedData['Tanggal'] = date('Y-m-d');

            ItemRequests::create($validatedData);

            return redirect()->back()->with('success', 'Data Request Barang Berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Request Barang Gagal ditambahkan.');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'Tanggal' => 'required',
                'ItemID' => 'required',
                'CustomerID' => 'required',
                'Jumlah' => 'required',
            ]);

            $itemRequests = ItemRequests::findOrFail($id);
            $itemRequests->update($validatedData);

            return redirect()->back()->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            ItemRequests::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Item Gagal dihapus.');
        }
    }
    public function accept(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'CustomerID' => 'required',
                'TotalHarga' => 'required',
            ]);
            $validatedData['Tanggal'] = date('Y-m-d');
            SalesTransactions::create($validatedData);
            ItemRequests::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Request Barang Berhasil diterima / dijual.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Request Barang Gagal diterima / dijual.');
        }
    }
}
