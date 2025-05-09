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
    
    <div class="pt-14 px-4 pb-10 bg-white">
      <div class="max-w-7xl mx-auto">
        <!-- Grid gambar+deskripsi dan maps+alamat -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Kolom 1: Gambar rusun + deskripsi -->
          <div>
            <img src="/img/rusun.png" alt="Rusunawa" class="w-full rounded-xl shadow-md mb-6" />
            <div class="text-gray-700 font-medium leading-relaxed text-justify space-y-4">
              <p>
                Rumah Susun Mahasiswa atau RUSUNAWA merupakan salah satu fasilitas yang dimiliki oleh UNSIL, bertempat di Kampus Mugasari RUSUNAWA UNSIL.
              </p>
              <p>
                Rektor UNSIL Dr. Ir. Nandang Busraeri, M.T., IPU., ASEAN Eng menjelaskan bahwa pembangunan asrama dengan konsep rumah susun dapat menjadi sarana pembelajaran mahasiswa UNSIL untuk berorganisasi, berkomunikasi, serta berkoordinasi dengan sesama mahasiswa di tahun pertama. 
              </p>
              <p>
                Bekal ini, menurutnya, akan bermanfaat tatkala mahasiswa harus terjun ke masyarakat. “Idealnya rusunawa diprioritaskan bagi mahasiswa baru dan ketika menginjak tingkat selanjutnya diharapkan mahasiswa bisa menghuni di kost sekitar lingkungan kampus II,” paparnya.
              </p>
              <p>
                Oleh karena itu, Rektor menekankan perlu dipastikan bahwa mahasiswa yang menghuni rusunawa tersebut memang berasal dari luar daerah Tasikmalaya. Hal tersebut bertujuan untuk memberi kesempatan pada mahasiswa yang berasal dari luar Kota Tasik agar lebih dekat dengan kampus. 
              </p>
              <p>
                Pada akhir kunjungannya, Rektor Universitas Siliwangi beserta rombongan melihat secara langsung fasilitas yang tersedia di Rusunawa. Selain itu, beliau berbincang dengan penghuni kamar terkait kenyamanan fasilitas yang telah disediakan.
              </p>
            </div>
          </div>
    
          <!-- Kolom 2: Google Maps + Alamat -->
          <div>
            <iframe
              class="w-full h-80 md:h-[450px] rounded-xl shadow-md mb-6"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7987494858476!2d108.25137529670491!3d-7.376438991991697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59ddcd2850db%3A0xcb30d91211172f11!2sRUSUNAWA%20UNSIL!5e0!3m2!1sid!2sid!4v1744235169710!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <div class="text-center">
              <h3 class="font-semibold text-green-700">Rusunawa Universitas Siliwangi – Mugasari</h3>
              <p class="text-gray-700">
                Jl. Mugasari, Kec. Tamansari, Kota Tasik. Tasikmalaya, Jawa Barat 46196.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>