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

    <!-- Main Content -->
    <main class="py-16 px-8">
        <h1 class="text-center text-3xl font-bold mb-8">Galeri SMK Azzainiyyah</h1>
        <p class="text-center text-gray-700 mb-12">
            Berikut adalah koleksi foto dan media kegiatan yang dilakukan oleh SMK Azzainiyyah.
        </p>

        <!-- Grid Galeri -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($galleries as $gallery)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $gallery->title }}</h2>
                    <p class="text-gray-600">{{ $gallery->description }}</p>
                </div>
            </div>
            @endforeach
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h4 class="text-lg font-bold">SMK Azzainiyyah</h4>
                    <p class="text-sm">Jl. KH Zezen Z.A Kp. Nagrog Sinar Barokah, Desa Perbawati, Sukabumi, Jawa Barat</p>
                    <p class="text-sm">Email: smk.azzainiyyah@gmail.com | Telepon: (0266) 622-4241</p>
                </div>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/smk.azzainiyyah.sukabumi/?locale=id_ID" target="_blank" class="hover:text-blue-500">Facebook</a>
                    <a href="https://www.instagram.com/smk_azzainiyyah/" target="_blank" class="hover:text-pink-500">Instagram</a>
                </div>
            </div>
            <div class="text-center text-sm mt-4">© 2025 SMK Azzainiyyah. All rights reserved.</div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdown-menu');
            const siakadButton = document.querySelector('[onclick="toggleDropdown()"]');
            if (!siakadButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
