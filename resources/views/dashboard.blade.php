<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 leading-tight">
            {{ __('Nuansa Control Center') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-stone-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200">
                    <p class="text-stone-500 text-sm uppercase tracking-widest font-bold">Total Booking</p>
                    <p class="text-4xl font-serif mt-2">{{ $total_bookings }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200">
                    <p class="text-stone-500 text-sm uppercase tracking-widest font-bold">Paket Aktif</p>
                    <p class="text-4xl font-serif mt-2">{{ $total_packages }}</p>
                </div>
                <div class="bg-stone-900 p-6 rounded-2xl shadow-sm text-white">
                    <p class="text-stone-400 text-sm uppercase tracking-widest font-bold">Status Server</p>
                    <p class="text-xl font-mono mt-2 text-green-400">Online & Secure</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-stone-200">
                <div class="p-8 text-stone-900">
                    <h3 class="text-lg font-serif mb-6 uppercase tracking-widest">Booking Terbaru</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-stone-400 text-xs uppercase tracking-widest border-b border-stone-100">
                                    <th class="pb-4 font-bold">Pelanggan</th>
                                    <th class="pb-4 font-bold">Paket</th>
                                    <th class="pb-4 font-bold">Tanggal Event</th>
                                    <th class="pb-4 font-bold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @forelse($recent_bookings as $booking)
                                <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors">
                                    <td class="py-4">
                                        <div class="font-bold">{{ $booking->name }}</div>
                                        <div class="text-xs text-stone-400">{{ $booking->phone }}</div>
                                    </td>
                                    <td class="py-4">{{ $booking->package->name }}</td>
                                    <td class="py-4">{{ $booking->event_date }}</td>
                                    <td class="py-4 text-right">
                                        <a href="#" class="text-stone-400 hover:text-stone-900 px-3 py-1 border border-stone-200 rounded-lg transition-all">Detail</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="py-10 text-center text-stone-400 italic">Belum ada booking masuk.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
