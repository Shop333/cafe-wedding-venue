<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-stone-800 leading-tight">
                {{ __('Management Paket Nuansa') }}
            </h2>
            <a href="{{ route('packages.create') }}" class="inline-flex items-center px-4 py-2 bg-stone-900 border border-transparent rounded-xl font-bold text-[10px] text-white uppercase tracking-widest hover:bg-stone-700 transition ease-in-out duration-150">
                + Tambah Paket Baru
            </a>
        </div>
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
                <div class="p-8 text-stone-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-stone-400 text-xs uppercase tracking-[0.2em] border-b border-stone-100">
                                    <th class="pb-6 font-bold">Gambar</th>
                                    <th class="pb-6 font-bold">Nama Paket</th>
                                    <th class="pb-6 font-bold">Harga</th>
                                    <th class="pb-6 font-bold">Kapasitas</th>
                                    <th class="pb-6 font-bold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @forelse($packages as $package)
                                <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors group">
                                    <td class="py-6">
                                        <div class="w-20 h-14 bg-stone-100 rounded-xl overflow-hidden">
                                            @if($package->image)
                                                <img src="{{ asset('storage/' . $package->image) }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-[10px] text-stone-400">No Image</div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-6">
                                        <div class="font-bold text-stone-900">{{ $package->name }}</div>
                                        <div class="text-xs text-stone-400 max-w-xs truncate">{{ $package->description }}</div>
                                    </td>
                                    <td class="py-6 font-serif font-bold text-stone-700">
                                        {{ $package->formatted_price }}
                                    </td>
                                    <td class="py-6">
                                        <span class="px-3 py-1 bg-stone-100 rounded-full text-[10px] font-bold uppercase tracking-wider text-stone-600">
                                            {{ $package->capacity }}
                                        </span>
                                    </td>
                                    <td class="py-6 text-right">
                                        <div class="flex justify-end gap-2">
                                            <a href="{{ route('packages.edit', $package) }}" class="p-2 text-stone-400 hover:text-blue-600 transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2.828 2.828 0 114 4L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                            </a>
                                            <form action="{{ route('packages.destroy', $package) }}" method="POST" onsubmit="return confirm('Hapus paket ini?')">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="p-2 text-stone-400 hover:text-red-600 transition-colors">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="py-20 text-center text-stone-400 italic">Belum ada paket.</td>
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
