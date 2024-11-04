<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Pastikan file CSS ada -->
</head>
<body>
    <div class="login-container" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f9fafb;">
        <div style="width: 400px; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center;">
            
            <!-- Tampilkan Logo -->
            <div class="logo" style="margin-bottom: 20px;">
                <img src="{{ asset('images/Logo_Azzainiyyah.png') }}" alt="Logo" width="100"> <!-- Sesuaikan path dan ukuran logo -->
            </div>

            <!-- Judul Halaman Login -->
            <h1 style="font-size: 24px; font-weight: bold; color: #333;">Masuk ke akun Anda</h1>

            <!-- Form Login -->
            <form action="{{ route('login') }}" method="POST" style="margin-top: 20px;">
                @csrf

                <!-- Input Email -->
                <div style="margin-bottom: 15px; text-align: left;">
                    <label for="email" style="display: block; font-weight: bold; color: #333;">Alamat email</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Input Password -->
                <div style="margin-bottom: 15px; text-align: left;">
                    <label for="password" style="display: block; font-weight: bold; color: #333;">Kata sandi</label>
                    <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Checkbox Remember Me -->
                <div style="margin-bottom: 20px; text-align: left;">
                    <label style="color: #333;">
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                </div>

                <!-- Tombol Masuk -->
                <button type="submit" style="width: 100%; padding: 10px; background-color: #d97706; color: #fff; border: none; border-radius: 4px; font-weight: bold;">
                    Masuk
                </button>
            </form>

            <!-- Tautan Daftar atau Lupa Kata Sandi -->
            <p style="margin-top: 15px;">
                <a href="{{ route('register') }}" style="color: #d97706;">Buat akun baru</a> atau 
                <a href="{{ route('password.request') }}" style="color: #d97706;">Lupa kata sandi?</a>
            </p>
        </div>
    </div>
</body>
</html>
