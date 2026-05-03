<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-stone-50">
        <div class="mb-10 text-center">
            <a href="/" class="font-serif text-4xl font-bold tracking-[0.4em] text-stone-900">
                NUANSA
            </a>
            <p class="text-[10px] text-stone-400 mt-3 uppercase tracking-[0.3em] font-medium">Email Verification</p>
        </div>

        <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] overflow-hidden sm:rounded-[3rem] border border-stone-100">
            
            <div class="mb-8">
                <p class="text-[11px] text-stone-500 leading-relaxed text-center uppercase tracking-wider">
                    {{ __('Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi email Anda melalui link yang baru saja kami kirimkan.') }}
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-8 p-4 bg-green-50 rounded-2xl border border-green-100">
                    <p class="text-[10px] text-green-700 font-bold text-center uppercase tracking-widest">
                        {{ __('Link verifikasi baru telah dikirim ke email Anda.') }}
                    </p>
                </div>
            @endif

            <div class="mt-10 flex flex-col gap-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="w-full py-4 bg-stone-900 hover:bg-stone-800 text-white rounded-2xl font-bold text-xs uppercase tracking-[0.2em] transition-all transform active:scale-95 shadow-xl shadow-stone-200">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="text-center">
                    @csrf
                    <button type="submit" class="text-[10px] uppercase tracking-widest text-stone-400 hover:text-red-600 transition-colors font-bold">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-10 text-center">
            <p class="text-[9px] text-stone-300 uppercase tracking-widest font-medium">
                &copy; {{ date('Y') }} Nuansa Cafe & Event Space
            </p>
        </div>
    </div>
</x-guest-layout>
