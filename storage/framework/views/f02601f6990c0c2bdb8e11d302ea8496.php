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
            <?php echo e(__('Data Pesanan Booking')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <?php if(session('success')): ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl text-sm flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-stone-200">
                <div class="p-8">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-stone-400 text-[10px] uppercase tracking-[0.2em] border-b border-stone-100">
                                <th class="pb-6 font-bold">Pelanggan</th>
                                <th class="pb-6 font-bold">Paket</th>
                                <th class="pb-6 font-bold">Status</th>
                                <th class="pb-6 text-right font-bold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors">
                                <td class="py-6">
                                    <div class="font-bold text-stone-900"><?php echo e($booking->name); ?></div>
                                    <div class="text-xs text-stone-400 font-mono"><?php echo e($booking->phone); ?></div>
                                </td>
                                <td class="py-6 text-stone-600">
                                    <?php echo e($booking->package->name); ?>

                                </td>
                                <td class="py-6">
                                    <form action="<?php echo e(route('bookings.update', $booking)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <select name="status" onchange="this.form.submit()" 
                                            class="text-[10px] uppercase tracking-widest font-bold border-none rounded-full px-4 py-1 cursor-pointer focus:ring-0
                                            <?php echo e($booking->status == 'pending' ? 'bg-amber-100 text-amber-700' : ($booking->status == 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-red-50 text-red-700')); ?>">
                                            <option value="pending" <?php echo e($booking->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                            <option value="confirmed" <?php echo e($booking->status == 'confirmed' ? 'selected' : ''); ?>>Confirmed</option>
                                            <option value="cancelled" <?php echo e($booking->status == 'cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="py-6 text-right">
                                    <div class="flex justify-end gap-3">
                                        <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $booking->phone)); ?>" target="_blank" class="p-2 text-stone-400 hover:text-green-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        </a>
                                        
                                        <form action="<?php echo e(route('bookings.destroy', $booking)); ?>" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="p-2 text-stone-400 hover:text-red-600 transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                    <div class="mt-8">
                        <?php echo e($bookings->links()); ?>

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
<?php /**PATH /home/cafe-wedding-venue/resources/views/admin/bookings/index.blade.php ENDPATH**/ ?>