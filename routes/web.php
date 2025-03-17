<?php

use Illuminate\Support\Facades\Route;  // Pastikan baris ini ada!
use App\Http\Controllers\PageController; // Tambahkan juga jika menggunakan controller

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/data-request', [PageController::class, 'dataRequest'])->name('data.request');
