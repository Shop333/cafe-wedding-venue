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
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-stone-800 leading-tight">
                <?php echo e(__('Management Paket Nuansa')); ?>

            </h2>
            <a href="<?php echo e(route('packages.create')); ?>" class="inline-flex items-center px-4 py-2 bg-stone-900 border border-transparent rounded-xl font-bold text-[10px] text-white uppercase tracking-widest hover:bg-stone-700 transition ease-in-out duration-150">
                + Tambah Paket Baru
            </a>
        </div>
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
                <div class="p-8 text-stone-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-stone-400 text-xs uppercase tracking-[0.2em] border-b border-stone-100">
                                    <th class="pb-6 font-bold">Gambar</th>
                                    <th class="pb-6 font-bold">Nama Paket</th>
                                    <th class="pb-6 font-bold">Harga</th>
                                    <th class="pb-6 font-bold">Kapasitas</th>
                                    <th class="pb-6 font-bold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="border-b border-stone-50 hover:bg-stone-50 transition-colors group">
                                    <td class="py-6">
                                        <div class="w-20 h-14 bg-stone-100 rounded-xl overflow-hidden">
                                            <?php if($package->image): ?>
                                                <img src="<?php echo e(asset('storage/' . $package->image)); ?>" class="w-full h-full object-cover">
                                            <?php else: ?>
                                                <div class="w-full h-full flex items-center justify-center text-[10px] text-stone-400">No Image</div>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td class="py-6">
                                        <div class="font-bold text-stone-900"><?php echo e($package->name); ?></div>
                                        <div class="text-xs text-stone-400 max-w-xs truncate"><?php echo e($package->description); ?></div>
                                    </td>
                                    <td class="py-6 font-serif font-bold text-stone-700">
                                        <?php echo e($package->formatted_price); ?>

                                    </td>
                                    <td class="py-6">
                                        <span class="px-3 py-1 bg-stone-100 rounded-full text-[10px] font-bold uppercase tracking-wider text-stone-600">
                                            <?php echo e($package->capacity); ?>

                                        </span>
                                    </td>
                                    <td class="py-6 text-right">
                                        <div class="flex justify-end gap-2">
                                            <a href="<?php echo e(route('packages.edit', $package)); ?>" class="p-2 text-stone-400 hover:text-blue-600 transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2.828 2.828 0 114 4L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                            </a>
                                            <form action="<?php echo e(route('packages.destroy', $package)); ?>" method="POST" onsubmit="return confirm('Hapus paket ini?')">
                                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="p-2 text-stone-400 hover:text-red-600 transition-colors">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="py-20 text-center text-stone-400 italic">Belum ada paket.</td>
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
<?php /**PATH /home/cafe-wedding-venue/resources/views/admin/packages/index.blade.php ENDPATH**/ ?>