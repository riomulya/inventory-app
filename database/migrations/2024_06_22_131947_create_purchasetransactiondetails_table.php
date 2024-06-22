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
        Schema::create('purchasetransactiondetails', function (Blueprint $table) {
            $table->id('DetailID');
            $table->unsignedBigInteger('TransaksiID')->nullable();
            $table->unsignedBigInteger('ItemID')->nullable();
            $table->integer('Jumlah')->nullable();
            $table->decimal('HargaPerItem', 10, 2)->nullable();

            // Foreign keys
            $table->foreign('TransaksiID')->references('TransaksiID')->on('purchasetransactions');
            $table->foreign('ItemID')->references('ItemID')->on('items');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchasetransactiondetails');
    }
};
