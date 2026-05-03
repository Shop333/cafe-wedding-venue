<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'total_bookings' => Booking::count(),
            'total_packages' => Package::count(),
            'recent_bookings' => Booking::with('package')->latest()->take(5)->get()
        ]);
    }
}
