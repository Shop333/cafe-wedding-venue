<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Tambahkan ini
use Illuminate\Support\Str;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'capacity',
        'image',
    ];

    /**
     * Fungsi otomatis untuk membuat Slug dari Nama Paket
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($package) {
            if (empty($package->slug)) {
                $package->slug = Str::slug($package->name);
            }
        });

        // Opsional: Update slug kalau nama paket diganti di dashboard
        static::updating(function ($package) {
            if ($package->isDirty('name')) {
                $package->slug = Str::slug($package->name);
            }
        });
    }

    /**
     * Relasi: Satu Paket bisa memiliki banyak Booking.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Helper untuk format harga Rupiah agar rapi di website
     * Akses di Blade dengan: $package->formatted_price
     */
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
