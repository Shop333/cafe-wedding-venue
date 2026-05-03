<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuansa Cafe & Event Space</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-stone-50 font-sans antialiased text-stone-900">

    <x-nav />

    <x-hero />

    <x-about />

    <x-fasilitas />

    <x-layanan />

    <x-gallery />

    <x-packages :packages="$packages" />

    <x-kontak />

    <x-footer />

</body>
</html>
