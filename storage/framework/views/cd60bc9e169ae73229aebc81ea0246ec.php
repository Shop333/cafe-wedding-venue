<nav x-data="{ open: false }" class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
        
        <div class="flex items-center">
            <h1 class="text-xl font-serif font-bold tracking-[0.2em] text-stone-900 uppercase">Nuansa</h1>
        </div>

        <div class="hidden md:flex items-center space-x-8 text-[10px] uppercase tracking-[0.2em] font-bold text-stone-500">
            <a href="#hero" class="hover:text-stone-900 transition-colors">Home</a>
            <a href="#about" class="hover:text-stone-900 transition-colors">About</a>
            <a href="#fasilitas" class="hover:text-stone-900 transition-colors">Fasilitas</a>
            <a href="#packages" class="hover:text-stone-900 transition-colors">Packages</a>
            <a href="#contact" class="hover:text-stone-900 transition-colors">Contact</a>

            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="text-stone-900 bg-stone-100 px-4 py-2 rounded-full hover:bg-stone-200 transition-all">
                    Dashboard
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="hover:text-stone-900 lowercase font-normal opacity-50 hover:opacity-100 transition-all italic">
                    Admin
                </a>
            <?php endif; ?>
        </div>

        <div class="hidden md:block">
            <a href="https://wa.me/628123456789" class="bg-stone-900 text-white px-6 py-2.5 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-stone-800 transition-all shadow-sm">
                Booking Now
            </a>
        </div>

        <div class="md:hidden flex items-center">
            <button @click="open = !open" class="text-stone-900 focus:outline-none">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-white border-t border-stone-100 px-6 py-8 space-y-6 shadow-xl">
        
        <a href="#hero" @click="open = false" class="block text-sm uppercase tracking-widest font-bold text-stone-600 hover:text-stone-900">Home</a>
        <a href="#about" @click="open = false" class="block text-sm uppercase tracking-widest font-bold text-stone-600 hover:text-stone-900">About</a>
        <a href="#fasilitas" @click="open = false" class="block text-sm uppercase tracking-widest font-bold text-stone-600 hover:text-stone-900">Fasilitas</a>
        <a href="#packages" @click="open = false" class="block text-sm uppercase tracking-widest font-bold text-stone-600 hover:text-stone-900">Packages</a>
        <a href="#contact" @click="open = false" class="block text-sm uppercase tracking-widest font-bold text-stone-600 hover:text-stone-900">Contact</a>
        
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="block text-sm uppercase tracking-widest font-bold text-stone-900">Dashboard</a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="block text-xs italic text-stone-400">Admin Login</a>
        <?php endif; ?>

        <div class="pt-4 border-t border-stone-100">
            <a href="https://wa.me/6283867279174" class="block w-full text-center bg-stone-900 text-white px-6 py-4 rounded-xl text-xs uppercase tracking-widest font-bold">
                Booking Via WhatsApp
            </a>
        </div>
    </div>
</nav>
<?php /**PATH /home/cafe-wedding-venue/resources/views/components/nav.blade.php ENDPATH**/ ?>