<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;

Route::get('/', function () {
    return view('welcome');
});

use App\Filament\Student\Pages\RaportPage;

Route::get('/raport/cetak', [RaportPage::class, 'cetakPDF'])->name('raport.cetak');
