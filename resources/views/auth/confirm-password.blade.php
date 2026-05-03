<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-stone-50">
        <div class="mb-10 text-center">
            <a href="/" class="font-serif text-4xl font-bold tracking-[0.4em] text-stone-900">
                NUANSA
            </a>
            <p class="text-[10px] text-stone-400 mt-3 uppercase tracking-[0.3em] font-medium">Security Confirmation</p>
        </div>

        <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] overflow-hidden sm:rounded-[3rem] border border-stone-100">
            
            <div class="mb-8 p-4 bg-amber-50 rounded-2xl border border-amber-100">
                <p class="text-[11px] text-amber-700 leading-relaxed text-center uppercase tracking-wider font-medium">
                    {{ __('Demi keamanan, silakan konfirmasi password Anda sebelum melanjutkan ke area sensitif.') }}
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="space-y-2">
                    <label for="password" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Password</label>
                    <x-text-input id="password" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-10">
                    <button class="w-full py-4 bg-stone-900 hover:bg-stone-800 text-white rounded-2xl font-bold text-xs uppercase tracking-[0.3em] transition-all transform active:scale-95 shadow-xl shadow-stone-200">
                        {{ __('Confirm Access') }}
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-10 text-center">
            <p class="text-[9px] text-stone-300 uppercase tracking-widest font-medium">
                &copy; {{ date('Y') }} Nuansa Cafe & Event Space
            </p>
        </div>
    </div>
</x-guest-layout>
