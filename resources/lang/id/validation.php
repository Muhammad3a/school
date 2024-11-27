<?php

return [
    'required' => 'Kolom :attribute wajib diisi.',
    'max' => [
        'numeric' => 'Kolom :attribute tidak boleh lebih dari :max.',
        'file' => 'File :attribute tidak boleh lebih besar dari :max kilobyte.',
        'string' => 'Karakter :attribute tidak boleh lebih dari :max.',
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'min' => [
        'numeric' => 'Kolom :attribute harus minimal :min.',
        'file' => 'File :attribute harus minimal :min kilobyte.',
        'string' => 'Karakter :attribute harus minimal :min.',
        'array' => ':attribute harus memiliki minimal :min item.',
    ],
    'email' => 'Kolom :attribute harus berupa email yang valid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',
    'unique' => 'Kolom :attribute sudah digunakan.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
];
