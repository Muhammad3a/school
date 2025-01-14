<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad SMK Azzainiyyah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100">

    <!-- Header dengan warna kustom -->
    <header class="flex justify-between items-center p-4 bg-blue-600 text-white shadow-md">
        <div class="flex items-center space-x-4">
            <img src="/images/Logo_Azzainiyyah.png" alt="Logo SMK Azzainiyyah" class="h-12">
            <h1 class="text-xl font-bold">SMK Azzainiyyah</h1>
        </div>
        <nav class="space-x-8 text-lg flex items-center">
            <a href="/" class="hover:text-blue-300">Beranda</a>
            <a href="/gallery" class="hover:text-blue-300">Galeri</a>
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
    {{-- <header class="flex justify-between items-center p-4 custom-bg text-white shadow-md">
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
    </header> --}}

    <!-- Hero Section dengan Slideshow -->
    <section class="text-center py-16">
        <h2 class="text-3xl font-semibold mb-8">Selamat datang di Sistem Akademik SMK Azzainiyyah</h2>

        <!-- Swiper Container untuk Hero Section -->
        <div class="swiper-container" style="max-width: 750px; margin: auto;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/mata pelajaran.jpg" alt="Hero Image 1" class="w-full max-w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/guru laki laki .jpg" alt="Hero Image 2" class="w-full max-w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/guru wanita.jpg" alt="Hero Image 3" class="w-full max-w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/tsm.jpg" alt="Hero Image 4" class="w-full max-w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/rpl.jpg" alt="Hero Image 5" class="w-full max-w-full h-64 object-cover rounded-lg">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Kegiatan Tahunan Section dengan Slideshow -->
    {{-- <section class="px-8 py-10">
        <h3 class="text-xl font-bold mb-4">Kegiatan Tahunan</h3>
        <div class="grid grid-cols-2 gap-4">
            <!-- Swiper 1 -->
            <div class="swiper-container kegiatan-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/ziarah.jpg" alt="Kegiatan 1" class="w-full max-h-48 object-cover rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/ziarah.jpg" alt="Kegiatan 2" class="w-full max-h-48 object-cover rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/ziarah.jpg" alt="Kegiatan 3" class="w-full max-h-48 object-cover rounded-lg">
                    </div>
                </div>
            </div>                       
        </div>
    </section> --}}

    <!-- Catatan Akhir Tahun Section -->
    <section class="px-8 py-10">
        <h3 class="text-xl font-bold mb-4">Catatan Akhir Tahun</h3>
        <p class="text-gray-700">Pada tahun ini, SMK Azzainiyyah telah mencapai banyak kemajuan dalam bidang akademik dan kegiatan ekstrakurikuler. Terima kasih kepada seluruh siswa, guru, dan staf yang telah bekerja keras. Mari kita terus berusaha untuk mencapai prestasi yang lebih baik di tahun depan.</p>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
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


        <!-- Footer -->
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
