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
            <h2 class="font-semibold text-xl text-stone-800 leading-tight">Laporan Keuangan</h2>
            <div class="flex gap-2">
                <a href="<?php echo e(route('reports.index', ['range' => 'daily'])); ?>" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold <?php echo e($range == 'daily' ? 'bg-stone-800 text-white' : ''); ?>">Harian</a>
                <a href="<?php echo e(route('reports.index', ['range' => 'weekly'])); ?>" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold <?php echo e($range == 'weekly' ? 'bg-stone-800 text-white' : ''); ?>">Mingguan</a>
                <a href="<?php echo e(route('reports.index', ['range' => 'monthly'])); ?>" class="px-4 py-2 bg-stone-100 rounded-xl text-xs font-bold <?php echo e($range == 'monthly' ? 'bg-stone-800 text-white' : ''); ?>">Bulanan</a>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-stone-200">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <p class="text-stone-400 text-[10px] uppercase tracking-widest font-bold">Total Pendapatan (<?php echo e($range); ?>)</p>
                        <h3 class="text-3xl font-serif font-bold text-stone-900">Rp <?php echo e(number_format($total_income, 0, ',', '.')); ?></h3>
                    </div>
                    <a href="<?php echo e(route('reports.pdf', ['range' => $range])); ?>" class="px-6 py-3 bg-green-600 text-white rounded-2xl text-xs font-bold uppercase tracking-widest hover:bg-green-700 transition">
                        Download PDF
                    </a>
                </div>

                <table class="w-full text-left">
                    <thead>
                        <tr class="text-stone-400 text-[10px] uppercase tracking-widest border-b border-stone-100">
                            <th class="pb-4">Tanggal Bayar</th>
                            <th class="pb-4">Pelanggan</th>
                            <th class="pb-4 text-right">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-b border-stone-50">
                            <td class="py-4 text-sm"><?php echo e($booking->created_at->format('d M Y')); ?></td>
                            <td class="py-4 text-sm font-bold"><?php echo e($booking->name); ?></td>
                            <td class="py-4 text-sm text-right font-mono text-green-600">Rp <?php echo e(number_format($booking->package->price, 0, ',', '.')); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
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
<?php /**PATH /home/cafe-wedding-venue/resources/views/admin/reports/index.blade.php ENDPATH**/ ?>