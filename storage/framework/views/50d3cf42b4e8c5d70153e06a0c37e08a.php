<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-stone-800 leading-tight">
            <?php echo e(__('Nuansa Control Center')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12 bg-stone-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200">
                    <p class="text-stone-500 text-sm uppercase tracking-widest font-bold">Total Booking</p>
                    <p class="text-4xl font-serif mt-2"><?php echo e($total_bookings); ?></p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200">
                    <p class="text-stone-500 text-sm uppercase tracking-widest font-bold">Paket Aktif</p>
                    <p class="text-4xl font-serif mt-2"><?php echo e($total_packages); ?></p>
                </div>
                <div class="bg-stone-900 p-6 rounded-2xl shadow-sm text-white">
                    <p class="text-stone-400 text-sm uppercase tracking-widest font-bold">Status Server</p>
                    <p class="text-xl font-mono mt-2 text-green-400">Online & Secure</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-stone-200">
                <div class="p-8 text-stone-900">
                    <h3 class="text-lg font-serif mb-6 uppercase tracking-widest">Booking Terbaru</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-stone-400 text-xs uppercase tracking-widest border-b border-stone-100">
                                    <th class="pb-4 font-bold">Pelanggan</th>
                                    <th class="pb-4 font-bold">Paket</th>
                                    <th class="pb-4 font-bold">Tanggal Event</th>
                                    <th class="pb-4 font-bold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <?php $__empty_1 = true; $__currentLoopData = $recent_bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors">
                                    <td class="py-4">
                                        <div class="font-bold"><?php echo e($booking->name); ?></div>
                                        <div class="text-xs text-stone-400"><?php echo e($booking->phone); ?></div>
                                    </td>
                                    <td class="py-4"><?php echo e($booking->package->name); ?></td>
                                    <td class="py-4"><?php echo e($booking->event_date); ?></td>
                                    <td class="py-4 text-right">
                                        <a href="#" class="text-stone-400 hover:text-stone-900 px-3 py-1 border border-stone-200 rounded-lg transition-all">Detail</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="py-10 text-center text-stone-400 italic">Belum ada booking masuk.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /home/cafe-wedding-venue/resources/views/dashboard.blade.php ENDPATH**/ ?>