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
    
    <div class="pt-12 px-4 pb-10 bg-white md:px-20 py-10">
      <h1 class="text-3xl md:text-4xl font-bold text-center text-[#1A7F30] mb-10">
        Fasilitas Rusunawa Universitas Siliwangi
      </h1>
    
      <!-- Denah -->
      <h2 class="text-xl font-semibold text-[#1A7F30] mb-4">Denah Bangunan</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 place-items-center">
        <img src="/img/denah-1.png" class="rounded-xl shadow-md mx-auto" alt="Denah 1" />
        <img src="/img/denah-2.png" class="rounded-xl shadow-md mx-auto" alt="Denah 2" />
        <div class="md:col-span-2 flex justify-center">
          <img src="/img/denah-3.png" class="rounded-xl shadow-md mx-auto" alt="Denah 3" />
        </div>
      </div>
    
      <!-- Ruang Serbaguna & Penyedia -->
      <h2 class="text-xl font-semibold text-[#1A7F30] mb-4">Ruang Serbaguna & Ruang Penyedia</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 place-items-center">
        <img src="/img/ruang-1.png" class="rounded-xl shadow-md mx-auto" alt="Ruang Serbaguna" />
        <img src="/img/ruang-2.png" class="rounded-xl shadow-md mx-auto" alt="Ruang Penyedia" />
      </div>
    
      <!-- Unit Hunian -->
      <h2 class="text-xl font-semibold text-[#1A7F30] mb-4">Unit Hunian</h2>
      <p class="mb-2">Kamar Rusunawa : 43 unit</p>
      <p class="mb-4">List Fasilitas kamar:</p>
      <ul class="list-decimal list-inside mb-6">
        <li>Dua bed</li>
        <li>Dua lemari</li>
        <li>Dua kursi</li>
        <li>Dua meja</li>
        <li>Satu kamar mandi</li>
      </ul>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 place-items-center">
        <img src="/img/bed-1.png" class="rounded-xl shadow-md mx-auto" alt="Kamar 1" />
        <img src="/img/bed-2.png" class="rounded-xl shadow-md mx-auto" alt="Kamar 2" />
        <img src="/img/wc-1.png" class="rounded-xl shadow-md mx-auto" alt="Kamar 3" />
        <img src="/img/wc-2.png" class="rounded-xl shadow-md mx-auto" alt="Kamar 4" />
      </div>
    
      <!-- Fasilitas Umum -->
      <h2 class="text-xl font-semibold text-[#1A7F30] mb-4">Fasilitas Umum</h2>
      <ul class="list-decimal list-inside mb-6">
        <li>Tiga Ruang Bersama</li>
        <li>Tiga Pantry Bersama</li>
        <li>WiFi Bersama</li>
        <li>Parkiran Motor</li>
      </ul>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 place-items-center">
        <img src="/img/lorong.png" class="rounded-xl shadow-md mx-auto" alt="Umum 1" />
        <img src="/img/ruang-tamu.png" class="rounded-xl shadow-md mx-auto" alt="Umum 2" />
        <img src="/img/dapur-1.png" class="rounded-xl shadow-md mx-auto" alt="Umum 3" />
        <img src="/img/dapur-2.png" class="rounded-xl shadow-md mx-auto" alt="Umum 4" />
      </div>
    </div>
</body>
</html>