<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 leading-tight">
            {{ __('Tambah Paket Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-stone-200">
                <div class="p-8">
                    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="name" value="Nama Paket" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('name')" required placeholder="Contoh: Intimate Wedding" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="price" value="Harga (Angka saja)" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('price')" required placeholder="Contoh: 5000000" />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="capacity" value="Kapasitas" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                                <x-text-input id="capacity" name="capacity" type="text" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900" :value="old('capacity')" required placeholder="Contoh: 50 - 100 Orang" />
                                <x-input-error class="mt-2" :messages="$errors->get('capacity')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="description" value="Deskripsi Paket" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-stone-200 rounded-xl focus:ring-stone-900 focus:border-stone-900 text-sm" required placeholder="Jelaskan fasilitas paket di sini...">{{ old('description') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div>
                            <x-input-label for="image" value="Foto Paket" class="uppercase tracking-widest text-[10px] font-bold text-stone-400" />
                            <div class="mt-2 flex items-center justify-center px-6 pt-5 pb-6 border-2 border-stone-100 border-dashed rounded-2xl hover:border-stone-300 transition-colors cursor-pointer relative">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-stone-300" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-stone-600">
                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-stone-900 hover:text-stone-700">
                                            <span>Upload a file</span>
                                            <input id="image" name="image" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-stone-400">PNG, JPG, JPEG up to 2MB</p>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-4">
                            <a href="{{ route('packages.index') }}" class="text-xs uppercase tracking-widest font-bold text-stone-400 hover:text-stone-900 transition-colors">Batal</a>
                            <x-primary-button class="rounded-xl px-8 py-3 bg-stone-900 hover:bg-stone-800">
                                {{ __('Simpan Paket') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
