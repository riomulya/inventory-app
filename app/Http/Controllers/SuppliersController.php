<?php

namespace App\Http\Controllers;


use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $suppliers = Suppliers::all();
        // dd($pTransactions);
        return view('pages/suppliers', compact('suppliers'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'NomorTelepon' => 'required|string|max:15|min:12',
            'Email' => 'required|email|max:255|unique:suppliers,Email',
        ]);

        // Insert data ke database
        Suppliers::create([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'NomorTelepon' => $request->NomorTelepon,
            'Email' => $request->Email,
        ]);

        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function destroy(Suppliers $supplier)
    {
        try {
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('suppliers.index')->with('error', 'Terjadi kesalahan saat menghapus supplier.');
        }
    }
    public function update(Request $request, $id)
    {

        try {
            // Validate input
            $request->validate([
                'Nama' => 'required|string|max:255',
                'Alamat' => 'required|string|max:255',
                'NomorTelepon' => 'required|string|min:12|max:15',
                'Email' => 'required|email|max:255',
            ]);

            // Find the supplier by ID
            $supplier = Suppliers::findOrFail($id);

            // Update supplier data
            $supplier->update([
                'Nama' => $request->Nama,
                'Alamat' => $request->Alamat,
                'NomorTelepon' => $request->NomorTelepon,
                'Email' => $request->Email,
            ]);

            // Redirect back with success message
            return redirect()->route('suppliers.index')->with('success', 'Data supplier berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('suppliers.index')->with('error', 'Data supplier gagal diupdate.');
        }
    }
}
