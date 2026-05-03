<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-stone-800 leading-tight">Laporan Keuangan</h2>
            <div class="flex gap-2">
                <a href="{{ route('reports.index', ['range' => 'daily']) }}" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold {{ $range == 'daily' ? 'bg-stone-800 text-white' : '' }}">Harian</a>
                <a href="{{ route('reports.index', ['range' => 'weekly']) }}" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold {{ $range == 'weekly' ? 'bg-stone-800 text-white' : '' }}">Mingguan</a>
                <a href="{{ route('reports.index', ['range' => 'monthly']) }}" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold {{ $range == 'monthly' ? 'bg-stone-800 text-white' : '' }}">Bulanan</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-stone-200">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <p class="text-stone-400 text-[10px] uppercase tracking-widest font-bold">Total Pendapatan ({{ $range }})</p>
                        <h3 class="text-3xl font-serif font-bold text-stone-900">Rp {{ number_format($total_income, 0, ',', '.') }}</h3>
                    </div>
                    <a href="{{ route('reports.pdf', ['range' => $range]) }}" class="px-6 py-3 bg-green-600 text-white rounded-2xl text-xs font-bold uppercase tracking-widest hover:bg-green-700 transition">
                        Download PDF
                    </a>
                </div>

                <table class="w-full text-left">
                    <thead>
                        <tr class="text-stone-400 text-[10px] uppercase tracking-widest border-b border-stone-100">
                            <th class="pb-4">Tanggal Bayar</th>
                            <th class="pb-4">Pelanggan</th>
                            <th class="pb-4 text-right">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr class="border-b border-stone-50">
                            <td class="py-4 text-sm">{{ $booking->created_at->format('d M Y') }}</td>
                            <td class="py-4 text-sm font-bold">{{ $booking->name }}</td>
                            <td class="py-4 text-sm text-right font-mono text-green-600">Rp {{ number_format($booking->package->price, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
