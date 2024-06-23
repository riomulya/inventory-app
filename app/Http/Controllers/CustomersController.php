<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customers = Customers::all();

        // dd($items);
        return view('pages/customer', compact('customers'));
    }


    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'NomorTelepon' => 'required|string|max:15|min:12',
            'Email' => 'required|email|max:255|unique:customers,Email',
        ]);

        // Insert data ke database
        Customers::create([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'NomorTelepon' => $request->NomorTelepon,
            'Email' => $request->Email,
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan.');
    }

    public function destroy(Customers $customer)
    {
        try {
            $customer->delete();
            return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('customers.index')->with('error', 'Terjadi kesalahan saat menghapus customer.');
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

            // Find the customer by ID
            $customer = Customers::findOrFail($id);

            // Update customer data
            $customer->update([
                'Nama' => $request->Nama,
                'Alamat' => $request->Alamat,
                'NomorTelepon' => $request->NomorTelepon,
                'Email' => $request->Email,
            ]);

            // Redirect back with success message
            return redirect()->route('customers.index')->with('success', 'Data Customer berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('customers.index')->with('error', 'Data customer gagal diupdate.');
        }
    }
}
