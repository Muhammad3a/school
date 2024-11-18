<?php

return [

    'title' => 'Masuk',

    'heading' => 'Masuk ke Akun Anda',

    'actions' => [

        'register' => [
            'before' => 'atau',
            'label' => 'Buat Akun',
        ],

        'request_password_reset' => [
            'label' => 'Lupa kata sandi?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Email',
        ],

        'password' => [
            'label' => 'Kata Sandi',
        ],

        'remember' => [
            'label' => 'Ingat Saya',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Masuk',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Kredensial ini tidak cocok dengan data kami.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Terlalu banyak percobaan masuk',
            'body' => 'Silakan coba lagi dalam :seconds detik.',
        ],

    ],

];
