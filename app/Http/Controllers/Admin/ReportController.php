<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $range = $request->get('range', 'daily'); // default harian
        $query = Booking::with('package')->where('status', 'confirmed');

        if ($range == 'daily') {
            $query->whereDate('created_at', Carbon::today());
        } elseif ($range == 'weekly') {
            $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        } elseif ($range == 'monthly') {
            $query->whereMonth('created_at', Carbon::now()->month);
        }

        $bookings = $query->latest()->get();
        $total_income = $bookings->sum(fn($b) => $b->package->price);

        return view('admin.reports.index', compact('bookings', 'total_income', 'range'));
    }

    public function downloadPdf(Request $request)
    {
        $range = $request->get('range', 'daily');
        $query = Booking::with('package')->where('status', 'confirmed');

        // ... logic filter yang sama dengan index ...
        
        $data = [
            'bookings' => $query->get(),
            'total' => $query->get()->sum(fn($b) => $b->package->price),
            'range' => $request->range,
            'date' => date('d/m/Y')
        ];

        $pdf = Pdf::loadView('admin.reports.pdf', $data);
        return $pdf->download("laporan-{$range}-nuansa.pdf");
    }
}
