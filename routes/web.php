<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;

Route::get('/', function () {
    return view('welcome');
});
