<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMK Azzainiyyah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="flex justify-between items-center p-4 custom-bg text-white shadow-md">
        <div class="flex items-center space-x-4">
            <img src="/images/Logo_Azzainiyyah.png" alt="Logo" class="h-12">
            <h1 class="text-xl font-bold">SMK AZZAINIYAH</h1>
        </div>
        <nav class="space-x-8 text-lg flex items-center">
            <a href="/" class="hover:text-blue-300">Beranda</a>
            <a href="/gallery" class="hover:text-blue-300">Galeri</a>

            <!-- Dropdown Menu untuk Siakad -->
            <div class="relative">
                <button onclick="toggleDropdown()" class="hover:text-blue-300 focus:outline-none">Siakad</button>
                <div id="dropdown-menu" class="absolute hidden bg-white text-black mt-2 rounded shadow-lg py-2">
                    <a href="/admin" class="block px-4 py-2 hover:bg-gray-200">Guru</a>
                    <a href="/student" class="block px-4 py-2 hover:bg-gray-200">Murid</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="hover:text-blue-300">Contact</a>
        </nav>
    </header>

    <!-- Content -->
    <main class="py-16 px-8">
        <h1 class="text-center text-3xl font-bold mb-8">Galeri SMK Azzainiyyah</h1>
        <p class="text-center text-gray-700 mb-12">Berikut adalah koleksi foto dan media kegiatan yang dilakukan oleh SMK Azzainiyyah.</p>        

        <!-- Grid Galeri -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Gambar 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/upacara.jpg" alt="Galeri 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Kegiatan Upacara</h2>
                    <p class="text-gray-600">Upacara bendera rutin setiap hari Senin.</p>
                    <a href="https://drive.google.com/drive/folders/1-CWNz0nQcvr8GWjDJdtfenjVJncZxcYR">klik disini</a>
                </div>
            </div>
            <!-- Gambar 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/ngaji.jpg" alt="Galeri 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Kegiatan Ngaji</h2>
                    <p class="text-gray-600">Kegiatan harian siswa di SMK Azzainiyyah</p>
                    <a href="https://drive.google.com/drive/folders/1-6pUeDArK2QcPYhs6dTWkltuJ4K2UVMr">klik disini</a>
                </div>
            </div>
            <!-- Gambar 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/futsal.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Kegiatan Ekstrakurikuler</h2>
                    <p class="text-gray-600">Latihan Ekstrakurikuler bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/19V5cTmMaIpCtPP2CIZZhAM-k7G4QETAf">klik disini</a>
                </div>
            </div>

            <!-- Gambar 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/ziarah.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Ziaroh</h2>
                    <p class="text-gray-600">Ziaroh bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1-B6sYNSRt_Ye5RUfmgl4eBf6vYORjo5f">klik disini</a>
                </div>
            </div>

            <!-- Gambar 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/ujian.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Ujian Kitab</h2>
                    <p class="text-gray-600">Ujian Kitab bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/18YsVi_r9B3i48ury7oYy88FVunWJP1ue">klik disini</a>
                </div>
            </div>

            <!-- Gambar 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/17agustus.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">17 Agustus</h2>
                    <p class="text-gray-600">17 Agustus Kitab bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1Lz7gRLptkDRJQILI7KFgxQZ9Cm-r79XI">klik disini</a>
                </div>
            </div>

            <!-- Gambar 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/akreditasi.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Akreditasi</h2>
                    <p class="text-gray-600">Akreditasi bersama guru lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1-saLGt3VCFVxDEyDnLp4RnZ3ZYNCxSf4">klik disini</a>
                </div>
            </div>

            <!-- Gambar 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/manakib.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Manakib</h2>
                    <p class="text-gray-600">Manakib bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1VGRKl4Yr7GqOS4e8pCIoVy8FyPnhxf35">klik disini</a>
                </div>
            </div>

            <!-- Gambar 8 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/P5.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">P5</h2>
                    <p class="text-gray-600">P5 bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1-cFPmI0NUbNHaDXWEIhJbOzlwyCqcCA5">klik disini</a>
                </div>
            </div>

            <!-- Gambar 9 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/marketday.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Market Day</h2>
                    <p class="text-gray-600">Market Day bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/109KP7Asxq8obMLVEf4W728HyBEC2fA8i">klik disini</a>
                </div>
            </div>

            <!-- Gambar 10 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/sosialisasikampus.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Sosialisasi Kampus</h2>
                    <p class="text-gray-600">Sosialisasi Kampus bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1-gY8KGYDl_SsOKd9q9ssF_cg-1GtEoPm">klik disini</a>
                </div>
            </div>

            <!-- Gambar 11 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/kunjunganindustri.jpg" alt="Galeri 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Kunjungan Industri</h2>
                    <p class="text-gray-600">Kunjungan Industri bersama siswa lainnya.</p>
                    <a href="https://drive.google.com/drive/folders/1-C_4Pc3zdkTqbs4ut6i0C-9faJ0QJGpT">klik disini</a>
                </div>
            </div>


            <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->

            <script>
                // Inisialisasi Swiper untuk Hero Section
                const heroSwiper = new Swiper('.swiper-container', {
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 3000,
                    },
                    spaceBetween: 10, // Jarak antar slide dalam Hero Section
                });
        
                // Inisialisasi Swiper untuk Kegiatan Tahunan Section
                const kegiatanSwipers = document.querySelectorAll('.kegiatan-swiper');
                kegiatanSwipers.forEach((el) => {
                    new Swiper(el, {
                        loop: true,
                        autoplay: {
                            delay: 3000,
                        },
                        spaceBetween: 10, // Jarak antar slide dalam Kegiatan Tahunan Section
                    });
                });
        
                // JavaScript untuk Toggle Dropdown
                function toggleDropdown() {
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    dropdownMenu.classList.toggle('hidden');
                }
        
                // Menutup dropdown jika klik di luar menu
                document.addEventListener('click', function(event) {
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    const siakadButton = document.querySelector('[onclick="toggleDropdown()"]');
        
                    if (!siakadButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            </script>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Bagian Kiri -->
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h4 class="text-lg font-bold">SMK Azzainiyyah</h4>
                    <p class="text-sm">Jl. KH Zezen Z.A Kp. Nagrog Sinar Barokah Desa Perbawati Kec. Sukabumi Kab. Sukabumi Jawa Barat</p>
                    <p class="text-sm">Email: smk.azzainiyyah@gmail.com | Telepon: (0266) 622-4241</p>
                </div>
                <!-- Bagian Kanan -->
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/smk.azzainiyyah.sukabumi/?locale=id_ID" target="_blank" class="hover:text-blue-500">Facebook</a>
                    <a href="https://www.instagram.com/smk_azzainiyyah/" target="_blank" class="hover:text-pink-500">Instagram</a>                        
                </div>
            </div>
            <div class="text-center mt-4 text-sm">
                &copy; 2024 SMK Azzainiyyah. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>
