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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Nama Paket (Contoh: Intimate Wedding)
            $table->string('slug')->unique(); // Untuk URL (Contoh: intimate-wedding)
            $table->bigInteger('price');      // Harga (Gunakan bigInteger untuk angka jutaan)
            $table->text('description');      // Penjelasan apa saja yang didapat
            $table->string('capacity');       // Kapasitas tamu (Contoh: 50-100 Orang)
            $table->string('image')->nullable(); // Nama file foto (Bisa dikosongkan dulu)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
