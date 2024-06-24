<?php

namespace App\Http\Controllers;

use App\Models\ItemCategories;
use App\Models\Items;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::all();
        $totalStok = Items::sum('JumlahStok');
        $suppliers = Suppliers::all();
        $itemKategori = ItemCategories::all();

        return view('pages.product', compact('items', 'totalStok', 'suppliers', 'itemKategori'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nama' => 'required',
                'Deskripsi' => 'required',
                'Harga' => 'required|numeric|min:1',
                'JumlahStok' => 'required|numeric|min:1',
                'SupplierID' => 'required',
                'KategoriID' => 'required',
            ]);

            Items::create($validatedData);

            return redirect()->route('items.index')->with('success', 'Item Berhasil diinput.');
        } catch (\Throwable $th) {
            return redirect()->route('items.index')->with('error', 'Item Gagal diinput.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'Nama' => 'required',
                'Deskripsi' => 'required',
                'Harga' => 'required|numeric|min:1',
                'JumlahStok' => 'required|numeric|min:1',
                'SupplierID' => 'required',
                'KategoriID' => 'required',
            ]);

            $item = Items::findOrFail($id);
            $item->update($validatedData);

            return redirect()->route('items.index')->with('success', 'Item Berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('items.index')->with('error', 'Item Gagal diupdate.');
        }
    }

    public function destroy($id)
    {
        try {
            Items::findOrFail($id)->delete();
            return redirect()->route('items.index')->with('success', 'Item Berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->route('items.index')->with('error', 'Item Gagal dihapus.');
        }
    }
}
