<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            'Nama' => 'John Doe',
            'Alamat' => '123 Main St',
            'NomorTelepon' => '123-456-7890',
            'Email' => 'john.doe@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Jane Smith',
            'Alamat' => '456 Elm St',
            'NomorTelepon' => '987-654-3210',
            'Email' => 'jane.smith@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Michael Johnson',
            'Alamat' => '789 Oak St',
            'NomorTelepon' => '555-555-5555',
            'Email' => 'michael.johnson@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Emily Davis',
            'Alamat' => '321 Pine St',
            'NomorTelepon' => '111-222-3333',
            'Email' => 'emily.davis@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'David Wilson',
            'Alamat' => '654 Cedar St',
            'NomorTelepon' => '444-444-4444',
            'Email' => 'david.wilson@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Sarah Lee',
            'Alamat' => '987 Birch St',
            'NomorTelepon' => '777-888-9999',
            'Email' => 'sarah.lee@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Robert Brown',
            'Alamat' => '852 Walnut St',
            'NomorTelepon' => '666-666-6666',
            'Email' => 'robert.brown@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Linda Martinez',
            'Alamat' => '741 Elmwood St',
            'NomorTelepon' => '999-999-9999',
            'Email' => 'linda.martinez@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'William Taylor',
            'Alamat' => '159 Cherry St',
            'NomorTelepon' => '222-333-4444',
            'Email' => 'william.taylor@example.com',
        ]);

        DB::table('customers')->insert([
            'Nama' => 'Karen Rodriguez',
            'Alamat' => '753 Maple St',
            'NomorTelepon' => '888-777-6666',
            'Email' => 'karen.rodriguez@example.com',
        ]);
    }
}
