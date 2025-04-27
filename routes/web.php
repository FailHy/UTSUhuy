<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServisController;

Route::get('/', [ServisController::class, 'index'])->name('servis.index'); 
// Menampilkan halaman utama servis
Route::resource('servis', ServisController::class)->except(['index']);
// Menampilkan halaman tambah, edit, dan detail servis
Route::get('servis-dihapus', [ServisController::class, 'deletedServis'])->name('servis.deleted');
// Menampilkan halaman servis yang dihapus
Route::post('servis/restore/{id}', [ServisController::class, 'restore'])->name('servis.restore');
// Mengembalikan data servis yang dihapus