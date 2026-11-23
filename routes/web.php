<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

Route::get('/', [BiodataController::class, 'index'])->name('home');
Route::get('/admin', [BiodataController::class, 'admin'])->name('admin.index');
Route::post('/admin/update', [BiodataController::class, 'update'])->name('admin.update');