<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseTransactionDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 9,
            'ItemID' => 9,
            'Jumlah' => 15,
            'HargaPerItem' => 15.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 10,
            'ItemID' => 10,
            'Jumlah' => 9,
            'HargaPerItem' => 18.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 1,
            'ItemID' => 1,
            'Jumlah' => 5,
            'HargaPerItem' => 50.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 2,
            'ItemID' => 2,
            'Jumlah' => 8,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 3,
            'ItemID' => 3,
            'Jumlah' => 3,
            'HargaPerItem' => 25.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 4,
            'ItemID' => 4,
            'Jumlah' => 6,
            'HargaPerItem' => 40.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 5,
            'ItemID' => 5,
            'Jumlah' => 10,
            'HargaPerItem' => 35.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 6,
            'ItemID' => 6,
            'Jumlah' => 4,
            'HargaPerItem' => 30.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 7,
            'ItemID' => 7,
            'Jumlah' => 7,
            'HargaPerItem' => 45.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 8,
            'ItemID' => 8,
            'Jumlah' => 9,
            'HargaPerItem' => 20.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 9,
            'ItemID' => 9,
            'Jumlah' => 12,
            'HargaPerItem' => 15.00,
        ]);

        DB::table('purchasetransactiondetails')->insert([
            'TransaksiID' => 4,
            'ItemID' => 10,
            'Jumlah' => 3,
            'HargaPerItem' => 18.00,
        ]);
    }
}
