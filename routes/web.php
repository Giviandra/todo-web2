<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Tambahkan ini agar Laravel mengenali controller-mu

// Route untuk menampilkan halaman form (sementara, nanti akan disempurnakan partnermu)
Route::get('/', function () {
    return view('todo');
});

// Route untuk menangani proses simpan data dari form [POST]
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');