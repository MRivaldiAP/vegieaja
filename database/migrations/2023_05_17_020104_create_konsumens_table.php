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
        Schema::create('konsumens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
            $table->string('alamat', 255)->nullable();
            $table->string('kota', 255);
            $table->string('hp', 255)->nullable();
            $table->string('kelurahan', 255);
            $table->integer('rw');
            $table->string('kode', 255);
            $table->integer('agen_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumens');
    }
};
