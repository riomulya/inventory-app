<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 1,
            'ItemID' => 1,
            'Jumlah' => 5,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 2,
            'ItemID' => 2,
            'Jumlah' => 3,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 3,
            'ItemID' => 3,
            'Jumlah' => 7,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 4,
            'ItemID' => 4,
            'Jumlah' => 4,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 5,
            'ItemID' => 5,
            'Jumlah' => 6,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 6,
            'ItemID' => 6,
            'Jumlah' => 8,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 7,
            'ItemID' => 7,
            'Jumlah' => 3,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 8,
            'ItemID' => 8,
            'Jumlah' => 10,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 9,
            'ItemID' => 9,
            'Jumlah' => 2,
        ]);

        DB::table('itemrequests')->insert([
            'Tanggal' => now(),
            'CustomerID' => 10,
            'ItemID' => 10,
            'Jumlah' => 5,
        ]);
    }
}
