<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 leading-tight">
            {{ __('Data Pesanan Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl text-sm flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-stone-200">
                <div class="p-8">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-stone-400 text-[10px] uppercase tracking-[0.2em] border-b border-stone-100">
                                <th class="pb-6 font-bold">Pelanggan</th>
                                <th class="pb-6 font-bold">Paket</th>
                                <th class="pb-6 font-bold">Status</th>
                                <th class="pb-6 text-right font-bold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach($bookings as $booking)
                            <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors">
                                <td class="py-6">
                                    <div class="font-bold text-stone-900">{{ $booking->name }}</div>
                                    <div class="text-xs text-stone-400 font-mono">{{ $booking->phone }}</div>
                                </td>
                                <td class="py-6 text-stone-600">
                                    {{ $booking->package->name }}
                                </td>
                                <td class="py-6">
                                    <form action="{{ route('bookings.update', $booking) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" onchange="this.form.submit()" 
                                            class="text-[10px] uppercase tracking-widest font-bold border-none rounded-full px-4 py-1 cursor-pointer focus:ring-0
                                            {{ $booking->status == 'pending' ? 'bg-amber-100 text-amber-700' : ($booking->status == 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-red-50 text-red-700') }}">
                                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="py-6 text-right">
                                    <div class="flex justify-end gap-3">
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $booking->phone) }}" target="_blank" class="p-2 text-stone-400 hover:text-green-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        </a>
                                        
                                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-stone-400 hover:text-red-600 transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-8">
                        {{ $bookings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
