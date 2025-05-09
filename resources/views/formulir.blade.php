<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <title>Document</title>
</head>
<body>
    <x-navbar />
    
    <div class="max-w-5xl mx-auto p-6 md:p-12">
      <h1 class="text-2xl md:text-3xl font-semibold text-center text-[#1A7F30] mb-10">
        Pendaftaran Calon Penguni Rusunawa Universitas Siliwangi
      </h1>
      @if(session('success'))
        <div class="text-green-600 font-semibold text-center mb-4">
            {{ session('success') }}
        </div>
    @endif

    
      <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-3 gap-4 text-[#1A7F30]">
        @csrf
        <label class="md:col-span-1 self-center font-bold">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">NPM</label>
        <input type="text" name="npm" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Jurusan</label>
        <input type="text" name="jurusan" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Fakultas</label>
        <input type="text" name="fakultas" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Alamat</label>
        <input type="text" name="alamat" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Desa/ Kelurahan</label>
        <input type="text" name="desa" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Kota/ Kabupaten</label>
        <input type="text" name="kota" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Provinsi</label>
        <input type="text" name="provinsi" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Nomor Whatsapp</label>
        <input type="tel" name="nomor_whatsapp" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
      
        <label class="md:col-span-1 self-center font-bold">Email</label>
        <input type="email" name="email" class="md:col-span-2 border border-[#1A7F30] rounded px-4 py-2 w-full font-semibold text-black" />
    
        <!-- Upload Section -->

        <!-- KTP -->
        <label class="md:col-span-1 self-center font-bold">Unggah KTP</label>
        <div class="md:col-span-2">
        <label class="flex items-center gap-2 border border-[#1A7F30] rounded px-4 py-2 w-full cursor-pointer text-[#1A7F30] hover:bg-green-50">
            <img src="/svg/upload.svg" alt="Upload Icon" class="w-5 h-5 mr-2" />
            <span id="ktpLabel" class="text-[#1A7F30]">Upload File</span>
            <input type="file" name="ktp" class="hidden" onchange="previewFileName(this, 'ktpLabel')" />
        </label>
        </div>

        <!-- KK -->
        <label class="md:col-span-1 self-center font-bold">Unggah KK</label>
        <div class="md:col-span-2">
        <label class="flex items-center gap-2 border border-[#1A7F30] rounded px-4 py-2 w-full cursor-pointer text-[#1A7F30] hover:bg-green-50">
            <img src="/svg/upload.svg" alt="Upload Icon" class="w-5 h-5 mr-2" />
            <span id="kkLabel" class="text-[#1A7F30]">Upload File</span>
            <input type="file" name="kk" class="hidden" onchange="previewFileName(this, 'kkLabel')" />
        </label>
        </div>

        <!-- Formulir -->
        <label class="md:col-span-1 self-center font-bold">Unggah Formulir</label>
        <div class="md:col-span-2">
        <label class="flex items-center gap-2 border border-[#1A7F30] rounded px-4 py-2 w-full cursor-pointer text-[#1A7F30] hover:bg-green-50">
            <img src="/svg/upload.svg" alt="Upload Icon" class="w-5 h-5 mr-2" />
            <span id="formulirLabel" class="text-[#1A7F30]">Upload File</span>
            <input type="file" name="formulir" class="hidden" onchange="previewFileName(this, 'formulirLabel')" />
        </label>
        </div>

        <!-- Kontrak -->
        <label class="md:col-span-1 self-center font-bold">Unggah Kontrak</label>
        <div class="md:col-span-2">
        <label class="flex items-center gap-2 border border-[#1A7F30] rounded px-4 py-2 w-full cursor-pointer text-[#1A7F30] hover:bg-green-50">
            <img src="/svg/upload.svg" alt="Upload Icon" class="w-5 h-5 mr-2" />
            <span id="kontrakLabel" class="text-[#1A7F30]">Upload File</span>
            <input type="file" name="kontrak" class="hidden" onchange="previewFileName(this, 'kontrakLabel')" />
        </label>
        </div>
        
    
        <!-- Tombol Submit -->
        <div class="md:col-span-3 flex justify-center mt-8">
          <button type="submit" class="px-6 py-2 border border-[#1A7F30] text-[#1A7F30] rounded hover:bg-[#1A7F30] hover:text-white transition">
            Submit
          </button>
        </div>
      </form>
    </div>
    <script>
      function previewFileName(input, labelId) {
        const fileName = input.files[0]?.name;
        const label = document.getElementById(labelId);
        if (fileName) {
          label.textContent = fileName;
          label.classList.remove('text-[#1A7F30]');
          label.classList.add('text-black');
        }
      }
    </script>
    <script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            e.preventDefault(); // stop form submit

            let npm = $('input[name="npm"]').val();
            let form = this;

            $.ajax({
                url: "{{ route('cek-npm') }}",
                type: 'POST',
                data: {
                    npm: npm,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.exists) {
                        alert('NPM sudah terdaftar. Silakan gunakan NPM lain.');
                    } else {
                        form.submit(); // submit form jika NPM belum ada
                    }
                },
                error: function () {
                    alert('Terjadi kesalahan saat memeriksa NPM.');
                }
            });
        });
    });
    </script>
</body>
</html>