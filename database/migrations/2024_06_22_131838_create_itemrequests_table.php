<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('itemrequests', function (Blueprint $table) {
            $table->id('RequestID');
            $table->date('Tanggal')->nullable();
            $table->unsignedBigInteger('CustomerID')->nullable();
            $table->unsignedBigInteger('ItemID')->nullable();
            $table->integer('Jumlah')->nullable();

            // Foreign keys
            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
            $table->foreign('ItemID')->references('ItemID')->on('items');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itemrequests');
    }
};
