<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

// Halaman umum untuk user biasa
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-kami', fn() => view('tentangkami'))->name('tentang');
Route::get('/hubungi-kami', fn() => view('hubungikami'))->name('hubungi');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show.public');

// User bisa lihat daftar berita dan detail berita (publik)
Route::get('/berita', [BeritaController::class, 'indexPublic'])->name('berita.index.public');

// Route admin, dengan middleware auth + admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Admin lihat berita (CRUD)
    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
});

require __DIR__.'/auth.php';