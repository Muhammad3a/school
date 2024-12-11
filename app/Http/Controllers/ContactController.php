<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Menampilkan halaman kontak
    public function index()
    {
        return view('contact');
    }

    // Menangani data yang dikirimkan melalui form
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Proses data sesuai kebutuhan (contoh: simpan ke database atau kirim email)
        // Misalnya:
        Contact::create($validatedData);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Form berhasil dikirim!');
    }
}
