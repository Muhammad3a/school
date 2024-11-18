@extends('filament::layouts.base')

@section('content')
<div class="filament-login-page flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h2 class="text-center text-2xl font-bold mb-6">Masuk ke Akun Anda</h2>

        <!-- Login Form -->
        <form method="POST" action="{{ route('filament.auth.login') }}">
            @csrf
            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    class="block w-full p-2 border border-gray-300 rounded-md" 
                    required 
                    autofocus>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700">Kata Sandi</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    class="block w-full p-2 border border-gray-300 rounded-md" 
                    required>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mb-4 flex items-center">
                <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-900">Ingat Saya</label>
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                    Masuk
                </button>
            </div>
        </form>

        <!-- Forgot Password Link -->
        <div class="text-center">
            <a href="{{ route('password.request') }}" class="text-blue-500 hover:underline">
                Lupa kata sandi?
            </a>
        </div>

        <!-- Back to Home Button -->
        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                Kembali ke Halaman Depan
            </a>
        </div>
    </div>
</div>
@endsection
