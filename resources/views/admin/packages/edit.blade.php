<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 leading-tight">
            {{ __('Edit Paket: ') }} <span class="italic text-stone-500">{{ $package->name }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-stone-200">
                <div class="p-8">
                    <form action="{{ route('packages.update', $package) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" value="Nama Paket" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('name', $package->name)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="price" value="Harga" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('price', $package->price)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="capacity" value="Kapasitas" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                                <x-text-input id="capacity" name="capacity" type="text" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('capacity', $package->capacity)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('capacity')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="description" value="Deskripsi Paket" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900 text-sm" required>{{ old('description', $package->description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div>
                            <x-input-label for="image" value="Ubah Foto Paket (Kosongkan jika tidak ingin ganti)" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            
                            @if($package->image)
                                <div class="mt-2 mb-4">
                                    <p class="text-[10px] text-stone-400 uppercase tracking-widest mb-2 font-bold">Foto Saat Ini:</p>
                                    <img src="{{ asset('storage/' . $package->image) }}" class="w-32 h-20 object-cover rounded-xl border border-stone-100 shadow-sm">
                                </div>
                            @endif

                            <div class="mt-2 flex items-center justify-center px-6 pt-5 pb-6 border-2 border-stone-100 border-dashed rounded-2xl hover:border-stone-300 transition-colors cursor-pointer relative">
                                <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-stone-600">
                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-stone-900 hover:text-stone-700">
                                            <span>Upload foto baru</span>
                                            <input id="image" name="image" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-stone-400">PNG, JPG up to 2MB</p>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-4 border-t border-stone-50">
                            <a href="{{ route('packages.index') }}" class="text-xs uppercase tracking-widest font-bold text-stone-400 hover:text-stone-900 transition-colors">Batal</a>
                            <x-primary-button class="rounded-xl px-8 py-3 bg-stone-900 hover:bg-stone-800">
                                {{ __('Perbarui Paket') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
