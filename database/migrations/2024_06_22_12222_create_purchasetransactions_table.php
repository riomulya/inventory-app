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
        
        Schema::create('purchasetransactions', function (Blueprint $table) {
            $table->id('TransaksiID');
            $table->date('Tanggal')->nullable();
            $table->decimal('TotalHarga', 10, 2)->nullable();
            $table->unsignedBigInteger('SupplierID')->nullable();

            // Foreign keys
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchasetransactions');
    }
};
