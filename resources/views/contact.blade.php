<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SMK Azzainiyyah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100">

    <!-- Header -->
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

    @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
    @endif

    <!-- Hero Section -->
    <section class="py-16 text-center">
        <h1 class="text-3xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-gray-700">Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
    </section>

    <!-- Form Kontak -->
    <section class="px-8 py-10">
        <form action="{{ route('contact.store') }}" method="POST" class="max-w-3xl mx-auto bg-white p-6 shadow-md rounded-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nama</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg p-2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Kirim</button>
        </form>      
        
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
