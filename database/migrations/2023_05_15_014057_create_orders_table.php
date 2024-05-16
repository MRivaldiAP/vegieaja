<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('produk_id', 255);
            $table->integer('agen_id');
            $table->integer('konsumen_id');
            $table->string('jumlah', 255);
            $table->string('url_foto', 255)->nullable();
            $table->timestamps();
            $table->text('detail');
            $table->string('harga', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
