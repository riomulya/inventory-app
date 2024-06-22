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
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('ItemID');
            $table->string('Nama')->nullable();
            $table->text('Deskripsi')->nullable();
            $table->decimal('Harga', 10, 2)->nullable();
            $table->integer('JumlahStok')->nullable();
            $table->unsignedBigInteger('SupplierID')->nullable();
            $table->unsignedBigInteger('KategoriID')->nullable();
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
            // Add foreign key for KategoriID if necessary
            $table->foreign('KategoriID')->references('KategoriID')->on('itemcategories')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
