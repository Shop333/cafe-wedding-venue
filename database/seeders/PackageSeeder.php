<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Intimate Akad',
                'price' => 7500000,
                'description' => 'Sewa venue 4 jam, dekorasi standar, sound system, dan kursi untuk 30 orang.',
                'capacity' => '30 Orang',
            ],
            [
                'name' => 'Premium Wedding Space',
                'price' => 25000000,
                'description' => 'Sewa seluruh area (Indoor & Outdoor) 8 jam, dekorasi mewah, ruang VIP, dan buffet 100 pax.',
                'capacity' => '100 - 150 Orang',
            ],
            [
                'name' => 'Cafe Event / Gathering',
                'price' => 3500000,
                'description' => 'Sewa area indoor 4 jam, snack & coffee corner, cocok untuk ulang tahun atau meeting.',
                'capacity' => '50 Orang',
            ],
        ];

        foreach ($packages as $package) {
            Package::create([
                'name' => $package['name'],
                'slug' => Str::slug($package['name']),
                'price' => $package['price'],
                'description' => $package['description'],
                'capacity' => $package['capacity'],
            ]);
        }
    }
}
