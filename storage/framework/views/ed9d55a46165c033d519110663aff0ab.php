<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuansa Cafe & Event Space</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-stone-50 font-sans antialiased text-stone-900">

    <?php if (isset($component)) { $__componentOriginalff09156f73c896030ee75284e9b2c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff09156f73c896030ee75284e9b2c466 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $attributes = $__attributesOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__attributesOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $component = $__componentOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__componentOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal04f02f1e0f152287a127192de01fe241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04f02f1e0f152287a127192de01fe241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $attributes = $__attributesOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__attributesOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $component = $__componentOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__componentOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalff6de83cb070587833d4f86022c57961 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff6de83cb070587833d4f86022c57961 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $attributes = $__attributesOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__attributesOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $component = $__componentOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__componentOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf313ce46711a66be810f2ceb8a496217 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf313ce46711a66be810f2ceb8a496217 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fasilitas','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fasilitas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf313ce46711a66be810f2ceb8a496217)): ?>
<?php $attributes = $__attributesOriginalf313ce46711a66be810f2ceb8a496217; ?>
<?php unset($__attributesOriginalf313ce46711a66be810f2ceb8a496217); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf313ce46711a66be810f2ceb8a496217)): ?>
<?php $component = $__componentOriginalf313ce46711a66be810f2ceb8a496217; ?>
<?php unset($__componentOriginalf313ce46711a66be810f2ceb8a496217); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal2b49830c0ed9db9035ea7123599d743f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b49830c0ed9db9035ea7123599d743f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layanan','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layanan'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b49830c0ed9db9035ea7123599d743f)): ?>
<?php $attributes = $__attributesOriginal2b49830c0ed9db9035ea7123599d743f; ?>
<?php unset($__attributesOriginal2b49830c0ed9db9035ea7123599d743f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b49830c0ed9db9035ea7123599d743f)): ?>
<?php $component = $__componentOriginal2b49830c0ed9db9035ea7123599d743f; ?>
<?php unset($__componentOriginal2b49830c0ed9db9035ea7123599d743f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal95dbe0677c992f5a27f7be25f2eb556a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95dbe0677c992f5a27f7be25f2eb556a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.gallery','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95dbe0677c992f5a27f7be25f2eb556a)): ?>
<?php $attributes = $__attributesOriginal95dbe0677c992f5a27f7be25f2eb556a; ?>
<?php unset($__attributesOriginal95dbe0677c992f5a27f7be25f2eb556a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95dbe0677c992f5a27f7be25f2eb556a)): ?>
<?php $component = $__componentOriginal95dbe0677c992f5a27f7be25f2eb556a; ?>
<?php unset($__componentOriginal95dbe0677c992f5a27f7be25f2eb556a); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal45fca42db31beee3980b9f9baaf5563a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45fca42db31beee3980b9f9baaf5563a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.packages','data' => ['packages' => $packages]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('packages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['packages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($packages)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45fca42db31beee3980b9f9baaf5563a)): ?>
<?php $attributes = $__attributesOriginal45fca42db31beee3980b9f9baaf5563a; ?>
<?php unset($__attributesOriginal45fca42db31beee3980b9f9baaf5563a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45fca42db31beee3980b9f9baaf5563a)): ?>
<?php $component = $__componentOriginal45fca42db31beee3980b9f9baaf5563a; ?>
<?php unset($__componentOriginal45fca42db31beee3980b9f9baaf5563a); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal8d153310eb4c761debbe20306839ae1d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d153310eb4c761debbe20306839ae1d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.kontak','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('kontak'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d153310eb4c761debbe20306839ae1d)): ?>
<?php $attributes = $__attributesOriginal8d153310eb4c761debbe20306839ae1d; ?>
<?php unset($__attributesOriginal8d153310eb4c761debbe20306839ae1d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d153310eb4c761debbe20306839ae1d)): ?>
<?php $component = $__componentOriginal8d153310eb4c761debbe20306839ae1d; ?>
<?php unset($__componentOriginal8d153310eb4c761debbe20306839ae1d); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

</body>
</html>
<?php /**PATH /home/cafe-wedding-venue/resources/views/welcome.blade.php ENDPATH**/ ?>