<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Filament\Student\Pages\RaportPage;
use App\Models\Contact;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk halaman Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk halaman Galeri
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Route untuk mencetak rapor
Route::get('/raport/cetak', [RaportPage::class, 'cetakPDF'])->name('raport.cetak');

Route::get('/contacts', function () {
    $contacts = Contact::all(); // Mengambil semua data
    return view('contacts.index', compact('contacts'));
})->name('contacts.index');
