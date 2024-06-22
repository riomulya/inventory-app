<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Elektronik',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Pakaian',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Alat Tulis',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Makanan',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Minuman',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Perabotan',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Mainan',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Kesehatan',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Olahraga',
        ]);

        DB::table('itemcategories')->insert([
            'NamaKategori' => 'Hewan Peliharaan',
        ]);
    }
}
