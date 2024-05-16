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
        Schema::create('buktis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->integer('tagihan');
			$table->integer('agen');
			$table->string('url-foto', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buktis');
    }
};
