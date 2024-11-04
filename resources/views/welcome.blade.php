<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad SMK Azzainiyyah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background-color: #1A007E; 
        }
    </style>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-white shadow-md">
        <div class="flex items-center space-x-4">
            <img src="/images/Logo_Azzainiyyah.png" alt="Logo" class="h-12">
            <h1 class="text-xl font-bold">SMK Azzainiyyah</h1>
        </div>
        <nav class="space-x-8 text-lg">
            <a href="#" class="hover:text-blue-500">Beranda</a>
            <a href="#" class="hover:text-blue-500">Profile</a>
            <a href="/admin" class="hover:text-blue-500">Login</a>
            <a href="#" class="hover:text-blue-500">Contact</a>
        </nav>
    </header>

    <!-- Hero Section dengan Slideshow -->
    <section class="text-center py-16">
        <h2 class="text-3xl font-semibold mb-8">Selamat datang di Sistem Akademik SMK Azzainiyyah</h2>
        
        <!-- Swiper Container untuk Hero Section -->
        <div class="swiper-container" style="max-width: 600px; margin: auto;">
            <div class="swiper-wrapper">
                <!-- Gambar-gambar di dalam elemen .swiper-slide -->
                <div class="swiper-slide">
                    <img src="/images/Screenshot 2024-10-28 220809.png" alt="Hero Image 1" class="w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/ziarah.jpg" alt="Hero Image 2" class="w-full h-64 object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/images/hero3.jpg" alt="Hero Image 3" class="w-full h-64 object-cover rounded-lg">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Kegiatan Tahunan Section dengan Slideshow -->
    <section class="px-8 py-30">
        <h3 class="text-xl font-bold mb-4">Kegiatan Tahunan</h3>
        <div class="grid grid-cols-2 gap-2">
            <div class="swiper-container kegiatan-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/images/ziarah.jpg" alt="" class="w-full h-24 object-cover rounded-lg"></div>
                    <div class="swiper-slide"><img src="/images/kegiatan2.jpg" alt="Kegiatan 2" class="w-full h-24 object-cover rounded-lg"></div>
                </div>
            </div>
            <div class="swiper-container kegiatan-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/images/kegiatan3.jpg" alt="Kegiatan 3" class="w-full h-24 object-cover rounded-lg"></div>
                    <div class="swiper-slide"><img src="/images/kegiatan4.jpg" alt="Kegiatan 4" class="w-full h-24 object-cover rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

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
        });

        // Inisialisasi Swiper untuk Kegiatan Tahunan Section
        const kegiatanSwipers = document.querySelectorAll('.kegiatan-swiper');
        kegiatanSwipers.forEach((el) => {
            new Swiper(el, {
                loop: true,
                autoplay: {
                    delay: 3000,
                },
            });
        });
    </script>
</body>
</html>
