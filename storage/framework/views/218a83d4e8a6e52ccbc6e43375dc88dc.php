<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['packages']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['packages']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section id="packages" class="py-24 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 space-y-4">
            <span class="text-stone-400 uppercase tracking-[0.4em] text-[10px] font-bold">Pricing Plan</span>
            <h3 class="text-4xl md:text-5xl font-serif text-stone-900">Pilihan Paket <span class="italic font-light">Event.</span></h3>
            <p class="text-stone-500 max-w-xl mx-auto font-light">Silakan isi detail rencana acara Anda untuk melakukan booking paket.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-stone-50 rounded-[2.5rem] p-8 border border-stone-100 flex flex-col hover:shadow-2xl transition-all duration-500 group">
                
                <div class="mb-6">
                    <h4 class="text-2xl font-serif text-stone-900 mb-2"><?php echo e($package->name); ?></h4>
                    <p class="text-stone-500 text-sm font-light leading-relaxed h-12 overflow-hidden"><?php echo e($package->description); ?></p>
                </div>

                <div class="mb-6 py-6 border-y border-stone-200/60">
                    <span class="text-stone-400 text-[10px] uppercase tracking-widest font-bold block mb-1">Mulai Dari</span>
                    <span class="text-3xl font-serif text-stone-900"><?php echo e($package->formatted_price); ?></span>
                    <div class="mt-2 flex items-center gap-2 text-stone-500 text-xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="1.5"/></svg>
                        <span>Kapasitas: <?php echo e($package->capacity); ?></span>
                    </div>
                </div>

                <form action="<?php echo e(route('bookings.store')); ?>" method="POST" class="space-y-3">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="package_id" value="<?php echo e($package->id); ?>">
                    
                    <div>
                        <input type="text" name="name" placeholder="Nama Lengkap" required 
                            class="w-full bg-white border-stone-200 rounded-xl text-sm focus:ring-stone-900 focus:border-stone-900 placeholder:text-stone-300">
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="phone" placeholder="No. WhatsApp" required 
                            class="w-full bg-white border-stone-200 rounded-xl text-sm focus:ring-stone-900 focus:border-stone-900 placeholder:text-stone-300">
                        <input type="date" name="event_date" required 
                            class="w-full bg-white border-stone-200 rounded-xl text-sm focus:ring-stone-900 focus:border-stone-900 text-stone-500">
                    </div>

                    <input type="hidden" name="email" value="customer@nuansa.com">

                    <button type="submit" class="w-full mt-4 bg-stone-900 text-white py-4 rounded-2xl text-[10px] uppercase tracking-[0.2em] font-bold hover:bg-stone-800 transition-all shadow-lg shadow-stone-200 group-hover:-translate-y-1">
                        Booking & Chat WhatsApp
                    </button>
                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /home/cafe-wedding-venue/resources/views/components/packages.blade.php ENDPATH**/ ?>