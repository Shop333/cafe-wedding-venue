<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-stone-50">
        <div class="mb-10 text-center">
            <a href="/" class="font-serif text-4xl font-bold tracking-[0.4em] text-stone-900">
                NUANSA
            </a>
            <p class="text-[10px] text-stone-400 mt-3 uppercase tracking-[0.3em] font-medium">Create Admin Account</p>
        </div>

        <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] overflow-hidden sm:rounded-[3rem] border border-stone-100">
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-2">
                    <label for="name" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Full Name</label>
                    <x-text-input id="name" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all" 
                                   type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                                   placeholder="Nama Lengkap" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="email" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Email Address</label>
                    <x-text-input id="email" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all" 
                                   type="email" name="email" :value="old('email')" required autocomplete="username" 
                                   placeholder="admin@nuansa.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="password" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Password</label>
                    <x-text-input id="password" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password"
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="password_confirmation" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Confirm Password</label>
                    <x-text-input id="password_confirmation" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-10 space-y-6">
                    <button class="w-full py-4 bg-stone-900 hover:bg-stone-800 text-white rounded-2xl font-bold text-xs uppercase tracking-[0.3em] transition-all transform active:scale-95 shadow-xl shadow-stone-200">
                        {{ __('Register Account') }}
                    </button>

                    <div class="text-center">
                        <a class="text-[10px] uppercase tracking-widest text-stone-400 hover:text-stone-800 transition-colors" href="{{ route('login') }}">
                            {{ __('Sudah punya akun? Login') }}
                        </a>
                    </div>
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
