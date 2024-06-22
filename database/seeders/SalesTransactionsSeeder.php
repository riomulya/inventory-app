<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('salestransactions')->insert([
            'TransaksiID' => 1,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 300.00,
            'CustomerID' => 1,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 2,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 120.00,
            'CustomerID' => 2,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 3,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 210.00,
            'CustomerID' => 3,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 4,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 100.00,
            'CustomerID' => 4,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 5,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 210.00,
            'CustomerID' => 5,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 6,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 224.00,
            'CustomerID' => 6,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 7,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 100.00,
            'CustomerID' => 7,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 8,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 100.00,
            'CustomerID' => 8,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 9,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 150.00,
            'CustomerID' => 9,
        ]);

        DB::table('salestransactions')->insert([
            'TransaksiID' => 10,
            'Tanggal' => '2024-06-22',
            'TotalHarga' => 54.00,
            'CustomerID' => 10,
        ]);
    }
}
