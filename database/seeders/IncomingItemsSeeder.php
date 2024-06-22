<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('incomingitems')->insert([
            'TransaksiID' => 1,
            'Tanggal' => now(),
            'ItemID' => 1,
            'Jumlah' => 10,
            'HargaPerItem' => 50.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 2,
            'Tanggal' => now(),
            'ItemID' => 2,
            'Jumlah' => 15,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 3,
            'Tanggal' => now(),
            'ItemID' => 3,
            'Jumlah' => 8,
            'HargaPerItem' => 25.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 4,
            'Tanggal' => now(),
            'ItemID' => 4,
            'Jumlah' => 12,
            'HargaPerItem' => 40.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 5,
            'Tanggal' => now(),
            'ItemID' => 5,
            'Jumlah' => 20,
            'HargaPerItem' => 35.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 6,
            'Tanggal' => now(),
            'ItemID' => 6,
            'Jumlah' => 18,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 7,
            'Tanggal' => now(),
            'ItemID' => 7,
            'Jumlah' => 5,
            'HargaPerItem' => 45.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 8,
            'Tanggal' => now(),
            'ItemID' => 8,
            'Jumlah' => 14,
            'HargaPerItem' => 20.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 9,
            'Tanggal' => now(),
            'ItemID' => 9,
            'Jumlah' => 7,
            'HargaPerItem' => 15.00,
        ]);

        DB::table('incomingitems')->insert([
            'TransaksiID' => 10,
            'Tanggal' => now(),
            'ItemID' => 10,
            'Jumlah' => 10,
            'HargaPerItem' => 18.00,
        ]);
    }
}
