<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-01',
            'TotalHarga' => 1500000.00,
            'SupplierID' => 1,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-05',
            'TotalHarga' => 2500000.00,
            'SupplierID' => 2,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-10',
            'TotalHarga' => 1800000.00,
            'SupplierID' => 3,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-15',
            'TotalHarga' => 1200000.00,
            'SupplierID' => 4,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-20',
            'TotalHarga' => 3000000.00,
            'SupplierID' => 5,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-25',
            'TotalHarga' => 2000000.00,
            'SupplierID' => 6,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-28',
            'TotalHarga' => 2200000.00,
            'SupplierID' => 7,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-06-30',
            'TotalHarga' => 2800000.00,
            'SupplierID' => 8,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-07-02',
            'TotalHarga' => 1900000.00,
            'SupplierID' => 9,
        ]);

        DB::table('purchasetransactions')->insert([
            'Tanggal' => '2024-07-05',
            'TotalHarga' => 2600000.00,
            'SupplierID' => 10,
        ]);
    }
}
