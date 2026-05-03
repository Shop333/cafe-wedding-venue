<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Admin\ReportController; // Import Controller Laporan
use App\Models\Package;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- PUBLIC ROUTES ---
Route::get('/', function () {
    $packages = Package::latest()->get(); 
    return view('welcome', compact('packages'));
})->name('home');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');


// --- ADMIN ROUTES (Auth & Verified) ---
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        
        // Management Paket
        Route::resource('packages', PackageController::class);

        // Management Booking
        Route::resource('bookings', BookingController::class)->only([
            'index', 'update', 'destroy'
        ]);

        // --- Fitur Laporan Keuangan ---
        // Halaman list laporan (Harian/Mingguan/Bulanan)
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
        // Download PDF
        Route::get('/reports/pdf', [ReportController::class, 'downloadPdf'])->name('reports.pdf');
    });

    // Profile Settings
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
