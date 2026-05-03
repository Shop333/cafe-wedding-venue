<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan Seeder Paket kita terlebih dahulu
        $this->call([
            PackageSeeder::class,
        ]);

        // Tetap biarkan user bawaan jika Anda butuh login nanti
        User::factory()->create([
            'name' => 'Admin Nuansa',
            'email' => 'admin@nuansa.com',
        ]);
    }
}
