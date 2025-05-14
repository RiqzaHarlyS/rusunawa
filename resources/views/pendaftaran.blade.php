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
    
    <div class="max-w-4xl mx-auto px-4 py-10 space-y-10">
      <!-- Persyaratan Calon Penghuni -->
      <section>
        <h2 class="text-2xl font-bold text-center mb-4">Persyaratan Calon Penghuni</h2>
        <ol class="list-decimal pl-6 space-y-1 text-justify font-medium">
          <li>Fotokopi Kartu Mahasiswa UNSIL yang masih berlaku sebanyak 1 (satu) lembar;</li>
          <li>Fotokopi Kartu Tanda Penduduk (KTP) sebanyak 1 (satu) lembar;</li>
          <li>Fotokopi Kartu Keluarga (KK) sebanyak 1 (satu) lembar;</li>
          <li>Surat Keterangan Berkelakuan Baik yang dibuktikan dengan rekomendasi dari Jurusan/Fakultas; dan</li>
          <li>Surat Keterangan Sehat Jasmani dan Rohani yang dibuktikan dengan rekomendasi dari Dokter.</li>
        </ol>
      
        <!-- Tombol sejajar dengan teks -->
        <a href="{{ asset('doc/Formulir_Pendaftaran_Calon_Penghuni_Rusunawa.pdf') }}" class="text-blue-700 font-semibold underline mt-3 inline-block pl-6">Download dokumen</a>
      </section>      
    
      <!-- Kontrak Tata Tertib Penghunian -->
      <section>
        <h2 class="text-2xl font-bold text-center mb-4">Kontrak Tata Tertib Penghunian</h2>
        <ol class="list-decimal pl-6 space-y-2 text-justify font-medium">
          <li>
            Penghuni adalah penyewa yang ditetapkan berdasarkan Perjanjian Sewa Menyewa;
          </li>
          <li>
            Tempat penghuni diperkenankan dihuni sebanyak 2 (dua) orang;
          </li>
          <li>
            Menciptakan keamanan dan estetika (kebersihan dan kerapihan) tempat dan lingkungan hunian;
          </li>
          <li>
            Apabila meninggalkan tempat, listrik sebaiknya dipadamkan, pastikan kran air dan gas tertutup.
          </li>
          <li>
            Menjaga suara radio dan televisi jangan sampai mengganggu tetangga.
          </li>
          <li>
            Yang meninggalkan/mengosongkan tempat hunian untuk sementara harus melaporkan kepada Kepala Rusunawa dan Tim Pengelola;
          </li>
          <li>
            Menjalin hubungan kekeluargaan antar sesama penghuni;
          </li>
          <li>
            Pengerjaan peralatan, perbaikan/renovasi yang bersifat umum, harus setetangga/penghuni lain dan Tim Pengelola;
          </li>
          <li>
            Dilarang menyimpan, mengedarkan, dan/atau memanfaatkan barang cetakan, audio visual yang bersifat pornografi, minuman keras, narkotika, obat-obatan terlarang, senjata tajam dan senjata api;
          </li>
          <li>
            Perjanjian Sewa Menyewa dibuat dalam jangka waktu 1 (satu) tahun dan bisa diperpanjang hanya untuk 1 (satu) kali perpanjangan dengan melakukan pendaftaran kembali, dengan catatan tidak ada surat teguran tertulis dari Kepala Rusunawa;
          </li>
          <li>
            Penghuni/tamu Penghuni yang membawa kendaraan menempatkan pada tempat parkir/lokasi yang telah ditetapkan oleh Pengelola Rusunawa; dan
          </li>
          <li>
            Ketentuan-ketentuan lain yang diatur dalam Perjanjian Sewa Menyewa Rusunawa dan diberlakukan oleh Tim Pengelola.
          </li>
          <a href="{{ asset('doc/Surat_Pernyataan_Untuk_Mematuhi_Tata_Tertib_Penghunian.pdf') }}" class="text-blue-700 font-semibold underline mt-3 inline-block">Download dokumen</a>
        </ol>
      </section>
      
    
      <!-- Tombol Daftar Sekarang -->
      <div class="flex justify-center">
        <a href="/formulir" class="border-2 border-green-600 text-green-600 px-6 py-3 rounded-lg font-semibold text-lg hover:bg-green-100 transition duration-200">Daftar Sekarang</a>
      </div>
    </div>
</body>
</html>