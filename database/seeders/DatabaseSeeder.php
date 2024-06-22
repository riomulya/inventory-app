<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CustomersSeeder::class;
        IncomingItemsSeeder::class;
        OutgoingItemsSeeder::class;
        PurchaseTransactionsSeeder::class;
        PurchaseTransactionDetailsSeeder::class;
        SalesTransactionsSeeder::class;
        SuppliersSeeder::class;
        ItemsSeeder::class;
        ItemCategoriesSeeder::class;
        ItemRequestsSeeder::class;
        SuppliersSeeder::class;
    }
}
