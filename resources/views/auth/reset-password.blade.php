<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-stone-50">
        <div class="mb-10 text-center">
            <a href="/" class="font-serif text-4xl font-bold tracking-[0.4em] text-stone-900">
                NUANSA
            </a>
            <p class="text-[10px] text-stone-400 mt-3 uppercase tracking-[0.3em] font-medium">Set New Password</p>
        </div>

        <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] overflow-hidden sm:rounded-[3rem] border border-stone-100">
            
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Email Confirmation</label>
                    <x-text-input id="email" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all opacity-70" 
                                   type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" readonly />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="password" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">New Password</label>
                    <x-text-input id="password" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all" 
                                   type="password" name="password" required autocomplete="new-password" 
                                   placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 space-y-2">
                    <label for="password_confirmation" class="text-[10px] font-bold uppercase tracking-widest text-stone-400 ml-1">Confirm New Password</label>
                    <x-text-input id="password_confirmation" class="block w-full !rounded-2xl !border-stone-100 !bg-stone-50 !py-3 focus:!ring-stone-200 focus:!border-stone-200 transition-all"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-10">
                    <button class="w-full py-4 bg-stone-900 hover:bg-stone-800 text-white rounded-2xl font-bold text-xs uppercase tracking-[0.2em] transition-all transform active:scale-95 shadow-xl shadow-stone-200">
                        {{ __('Update Password') }}
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
