<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServisController;

Route::get('/', [ServisController::class, 'index'])->name('servis.index'); 
Route::resource('servis', ServisController::class);
Route::get('servis-dihapus', [ServisController::class, 'deletedServis'])->name('servis.deleted');
Route::post('servis/restore/{id}', [ServisController::class, 'restore'])->name('servis.restore');
