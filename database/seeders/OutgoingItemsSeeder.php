<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('outgoingitems')->insert([
            'TransaksiID' => 1,
            'Tanggal' => now(),
            'ItemID' => 1,
            'Jumlah' => 7,
            'HargaPerItem' => 50.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 2,
            'Tanggal' => now(),
            'ItemID' => 2,
            'Jumlah' => 5,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 3,
            'Tanggal' => now(),
            'ItemID' => 3,
            'Jumlah' => 10,
            'HargaPerItem' => 25.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 4,
            'Tanggal' => now(),
            'ItemID' => 4,
            'Jumlah' => 8,
            'HargaPerItem' => 40.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 5,
            'Tanggal' => now(),
            'ItemID' => 5,
            'Jumlah' => 12,
            'HargaPerItem' => 35.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 6,
            'Tanggal' => now(),
            'ItemID' => 6,
            'Jumlah' => 6,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 7,
            'Tanggal' => now(),
            'ItemID' => 7,
            'Jumlah' => 3,
            'HargaPerItem' => 45.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 8,
            'Tanggal' => now(),
            'ItemID' => 8,
            'Jumlah' => 4,
            'HargaPerItem' => 20.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 9,
            'Tanggal' => now(),
            'ItemID' => 9,
            'Jumlah' => 15,
            'HargaPerItem' => 15.00,
        ]);

        DB::table('outgoingitems')->insert([
            'TransaksiID' => 10,
            'Tanggal' => now(),
            'ItemID' => 10,
            'Jumlah' => 9,
            'HargaPerItem' => 18.00,
        ]);
    }
}
