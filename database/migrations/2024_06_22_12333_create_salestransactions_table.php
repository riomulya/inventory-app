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

        Schema::create('salestransactions', function (Blueprint $table) {
            $table->id('TransaksiID');
            $table->date('Tanggal')->nullable();
            $table->decimal('TotalHarga', 10, 2)->nullable();
            $table->unsignedBigInteger('CustomerID')->nullable();

            // Foreign keys
            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salestransactions');
    }
};
