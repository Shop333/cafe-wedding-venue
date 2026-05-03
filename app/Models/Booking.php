<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    /**
     * Field yang boleh diisi secara massal.
     * Harus sesuai dengan kolom yang kita buat di migration tadi.
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'package_id',
        'event_date',
        'message',
        'status',
    ];

    /**
     * Relasi: Satu Booking dimiliki oleh satu Paket.
     * Ini akan menghubungkan package_id ke tabel packages.
     */
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
