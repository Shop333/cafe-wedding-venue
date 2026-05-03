<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * [ADMIN] Menampilkan daftar semua booking
     */
    public function index()
    {
        // Mengambil data booking terbaru dengan pagination
        $bookings = Booking::with('package')->latest()->paginate(10);
        
        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * [PUBLIC] Menyimpan data booking dari form landing page
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'package_id' => 'required|exists:packages,id',
            'event_date' => 'required|date',
            'message' => 'nullable|string',
        ]);

        // 2. Simpan ke Database
        $booking = Booking::create($validated);

        // 3. Buat Pesan WhatsApp Otomatis
        $packageName = $booking->package->name;
        $waNumber = "628123456789"; // GANTI DENGAN NOMOR WA OWNER NUANSA
        $text = "Halo Nuansa Cafe, saya ingin booking paket *$packageName*.\n\n" .
                "*Detail Pesanan:*\n" .
                "Nama: {$booking->name}\n" .
                "Tanggal: {$booking->event_date}\n" .
                "Pesan: " . ($booking->message ?? '-') . "\n\n" .
                "Mohon info ketersediaannya, terima kasih.";
        
        $waUrl = "https://wa.me/$waNumber?text=" . urlencode($text);

        // 4. Redirect ke WhatsApp
        return redirect()->away($waUrl);
    }

    /**
     * [ADMIN] Mengupdate status booking (Pending, Confirmed, Cancelled)
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled'
        ]);

        $booking->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status booking atas nama ' . $booking->name . ' berhasil diperbarui!');
    }

    /**
     * [ADMIN] Menghapus data booking
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return back()->with('success', 'Data booking berhasil dihapus dari sistem.');
    }
}
