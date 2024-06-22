<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'Nama' => 'Supplier A',
            'Alamat' => 'Jl. Supplier A No. 123',
            'NomorTelepon' => '08123456789',
            'Email' => 'suppliera@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier B',
            'Alamat' => 'Jl. Supplier B No. 456',
            'NomorTelepon' => '087654321',
            'Email' => 'supplierb@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier C',
            'Alamat' => 'Jl. Supplier C No. 789',
            'NomorTelepon' => '08567895432',
            'Email' => 'supplierc@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier D',
            'Alamat' => 'Jl. Supplier D No. 987',
            'NomorTelepon' => '0897654321',
            'Email' => 'supplierd@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier E',
            'Alamat' => 'Jl. Supplier E No. 654',
            'NomorTelepon' => '0812345678',
            'Email' => 'suppliere@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier F',
            'Alamat' => 'Jl. Supplier F No. 321',
            'NomorTelepon' => '0876543210',
            'Email' => 'supplierf@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier G',
            'Alamat' => 'Jl. Supplier G No. 246',
            'NomorTelepon' => '08543217654',
            'Email' => 'supplig@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier H',
            'Alamat' => 'Jl. Supplier H No. 135',
            'NomorTelepon' => '08987654321',
            'Email' => 'supplierh@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier I',
            'Alamat' => 'Jl. Supplier I No. 876',
            'NomorTelepon' => '08123456789',
            'Email' => 'supplieri@example.com',
        ]);

        DB::table('suppliers')->insert([
            'Nama' => 'Supplier J',
            'Alamat' => 'Jl. Supplier J No. 543',
            'NomorTelepon' => '0876543210',
            'Email' => 'supplierj@example.com',
        ]);
    }
}
