<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Nuansa Cafe')); ?></title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|playfair-display:700&display=swap" rel="stylesheet" />

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        
        <style>
            /* Custom utility untuk font serif Nuansa */
            .font-serif {
                font-family: 'Playfair Display', serif;
            }
        </style>
    </head>
    <body class="font-sans text-stone-900 antialiased">
        <div class="min-h-screen bg-stone-50">
            <?php echo e($slot); ?>

        </div>
    </body>
</html>
<?php /**PATH /home/cafe-wedding-venue/resources/views/layouts/guest.blade.php ENDPATH**/ ?>