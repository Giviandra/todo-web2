<?php

namespace App\Http\Controllers;

use App\Models\Task; // Pastikan model Task di-import
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Validasi agar input tidak boleh kosong
        $request->validate([
            'task' => 'required'
        ]);

        // Simpan ke database
        Task::create([
            'task' => $request->task
        ]);

        // Kembalikan ke halaman awal setelah berhasil menyimpan
        return back();
    }
}