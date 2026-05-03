<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-stone-50">
        <div class="mb-10 text-center">
            <a href="/" class="font-serif text-4xl font-bold tracking-[0.4em] text-stone-900">
                NUANSA
            </a>
            <p class="text-[10px] text-stone-400 mt-3 uppercase tracking-[0.3em] font-medium">Administrative Portal</p>
        </div>

        <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] overflow-hidden sm:rounded-[3rem] border border-stone-100">
            
            <x-auth-session-status class="mb-6" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Email Account</label>
                    <x-text-input id="email" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all" 
                                   type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                                   placeholder="admin@nuansa.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="password" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Password</label>
                    <x-text-input id="password" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6 px-1">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded-full border-stone-200 text-stone-800 shadow-sm focus:ring-stone-500" name="remember">
                        <span class="ms-2 text-xs text-stone-500 uppercase tracking-tighter">{{ __('Ingat saya') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-[10px] uppercase tracking-tighter text-stone-400 hover:text-stone-800 transition-colors" href="{{ route('password.request') }}">
                            {{ __('Lupa sandi?') }}
                        </a>
                    @endif
                </div>

                <div class="mt-10">
                    <button class="w-full py-4 bg-stone-900 hover:bg-stone-800 text-white rounded-2xl font-bold text-xs uppercase tracking-[0.3em] transition-all transform active:scale-95 shadow-xl shadow-stone-200">
                        {{ __('Authenticate') }}
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-10 text-center">
            <p class="text-[9px] text-stone-300 uppercase tracking-widest font-medium">
                &copy; {{ date('Y') }} Nuansa Cafe & Event Space System
            </p>
        </div>
    </div>
</x-guest-layout>
