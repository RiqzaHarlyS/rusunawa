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
    
    <section class="container mx-auto px-4 py-10 space-y-6">
      <!-- Box Pengumuman Pendaftaran -->
      <div class="border-2 border-green-700 rounded-xl w-full max-w-[56rem] mx-auto flex justify-center items-center text-center p-18">
        <h2 class="text-xl md:text-2xl font-semibold text-green-700">
          Pendaftaran Calon Penghuni Rusunawa Universitas Siliwangi - Mugarsari dibuka setiap tahun setelah penerimaan mahasiswa baru.
        </h2>
      </div>
    
      <!-- Box Informasi Lulus -->
      <div class="border-2 border-green-700 rounded-xl w-full max-w-[56rem] mx-auto flex flex-col justify-center items-center text-center p-18">
        <h3 class="text-xl md:text-2xl font-semibold text-green-700 mb-4">
          Daftar Informasi Lulus Sebagai Calon Penghuni Rusunawa
        </h3>
        <a href="#" class="text-blue-700 font-semibold underline">Download File</a>
      </div>
    </section>       
</body>
</html>