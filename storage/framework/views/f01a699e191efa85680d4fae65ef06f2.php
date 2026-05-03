<!DOCTYPE html>
<html>
<head>
    <title>Laporan Keuangan Nuansa</title>
    <style>
        body { font-family: 'Helvetica', sans-serif; color: #444; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #e5e5e5; padding-bottom: 10px; }
        .header h2 { margin: 0; color: #1c1917; text-transform: uppercase; letter-spacing: 2px; }
        .header p { margin: 5px 0; font-size: 12px; color: #78716c; }
        
        .summary { margin-bottom: 20px; }
        .summary table { width: 100%; }
        .summary td { font-size: 14px; }
        
        table.main { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table.main th { background: #f5f5f4; padding: 12px; text-align: left; font-size: 11px; text-transform: uppercase; color: #78716c; }
        table.main td { padding: 12px; border-bottom: 1px solid #f5f5f4; font-size: 12px; }
        
        .total-box { margin-top: 30px; text-align: right; padding: 15px; background: #fafaf9; border-radius: 10px; }
        .total-label { font-size: 12px; color: #78716c; }
        .total-amount { font-size: 18px; font-weight: bold; color: #1c1917; }
        
        .footer { position: fixed; bottom: 0; width: 100%; text-align: center; font-size: 10px; color: #a8a29e; }
    </style>
</head>
<body>
    <div class="header">
        <h2>NUANSA</h2>
        <p>Laporan Keuangan <?php echo e(ucfirst($range)); ?></p>
        <p>Tanggal Cetak: <?php echo e($date); ?></p>
    </div>

    <table class="main">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Paket</th>
                <th style="text-align: right;">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($booking->created_at->format('d/m/Y')); ?></td>
                <td><strong><?php echo e($booking->name); ?></strong></td>
                <td><?php echo e($booking->package->name); ?></td>
                <td style="text-align: right;">Rp <?php echo e(number_format($booking->package->price, 0, ',', '.')); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="total-box">
        <span class="total-label">Total Pendapatan (<?php echo e($range); ?>):</span><br>
        <span class="total-amount">Rp <?php echo e(number_format($total, 0, ',', '.')); ?></span>
    </div>

    <div class="footer">
        Nuansa Cafe & Event Space - Jembrana, Bali
    </div>
</body>
</html>
<?php /**PATH /home/cafe-wedding-venue/resources/views/admin/reports/pdf.blade.php ENDPATH**/ ?>