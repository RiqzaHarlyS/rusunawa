<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <title>Document</title>
</head>
<body>
    <x-navbar />
    
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('/img/rusun.png');">
        <div class="absolute inset-0 bg-opacity-50 flex items-center justify-center">
          <h1 class="text-white text-3xl md:text-6xl font-bold text-center px-4">
            Sistem Informasi
            <br>Rusunawa Universitas Siliwangi
          </h1>
        </div>
    </div>
</body>
</html>