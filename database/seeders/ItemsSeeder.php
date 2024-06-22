<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('items')->insert([
            'Nama' => 'Laptop Acer',
            'Deskripsi' => 'Laptop Acer dengan prosesor Intel Core i5 dan RAM 8GB.',
            'Harga' => 4500.00,
            'JumlahStok' => 20,
            'SupplierID' => 1,
            'KategoriID' => 1,
        ]);

        DB::table('items')->insert([
            'Nama' => 'T-shirt Nike',
            'Deskripsi' => 'Baju T-shirt Nike warna hitam dengan logo Nike di bagian depan.',
            'Harga' => 250.00,
            'JumlahStok' => 50,
            'SupplierID' => 2,
            'KategoriID' => 2,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Pensil 2B',
            'Deskripsi' => 'Pensil 2B dengan kualitas tinggi untuk menulis dan menggambar.',
            'Harga' => 5.00,
            'JumlahStok' => 100,
            'SupplierID' => 3,
            'KategoriID' => 3,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Roti Tawar',
            'Deskripsi' => 'Roti tawar ukuran besar, cocok untuk sarapan pagi.',
            'Harga' => 10.00,
            'JumlahStok' => 200,
            'SupplierID' => 4,
            'KategoriID' => 4,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Air Mineral',
            'Deskripsi' => 'Botol air mineral ukuran 500ml.',
            'Harga' => 2.00,
            'JumlahStok' => 300,
            'SupplierID' => 5,
            'KategoriID' => 5,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Meja Lipat',
            'Deskripsi' => 'Meja lipat portabel dengan bahan berkualitas.',
            'Harga' => 150.00,
            'JumlahStok' => 30,
            'SupplierID' => 6,
            'KategoriID' => 6,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Boneka Teddy Bear',
            'Deskripsi' => 'Boneka teddy bear berwarna coklat dengan bahan yang lembut.',
            'Harga' => 80.00,
            'JumlahStok' => 40,
            'SupplierID' => 7,
            'KategoriID' => 7,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Vitamin C',
            'Deskripsi' => 'Suplemen vitamin C untuk menjaga daya tahan tubuh.',
            'Harga' => 25.00,
            'JumlahStok' => 50,
            'SupplierID' => 8,
            'KategoriID' => 8,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Bola Sepak',
            'Deskripsi' => 'Bola sepak berukuran standar.',
            'Harga' => 30.00,
            'JumlahStok' => 25,
            'SupplierID' => 9,
            'KategoriID' => 9,
        ]);

        DB::table('items')->insert([
            'Nama' => 'Makanan Anjing',
            'Deskripsi' => 'Makanan anjing dengan rasa daging.',
            'Harga' => 15.00,
            'JumlahStok' => 60,
            'SupplierID' => 10,
            'KategoriID' => 10,
        ]);
    }
}
