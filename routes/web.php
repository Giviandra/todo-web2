<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Menampilkan halaman utama beserta datanya
Route::get('/', [TaskController::class, 'index']);

// Menghapus data berdasarkan ID
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');