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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pemesan
            $table->string('email'); // Email pemesan
            $table->string('phone'); // Nomor WhatsApp/HP
            
            // Menghubungkan ke tabel packages
            // Jika paket dihapus, data booking tetap ada (null) atau ikut terhapus (cascade)
            $table->foreignId('package_id')->constrained()->onDelete('cascade');
            
            $table->date('event_date'); // Tanggal acara
            $table->text('message')->nullable(); // Catatan tambahan (opsional)
            
            // Status booking untuk manajemen di dashboard
            $table->string('status')->default('pending'); // pending, confirmed, cancelled
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
