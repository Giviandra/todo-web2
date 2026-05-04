<?php
namespace App\Http\Controllers;

 feature/read-delete-task
use App\Models\Task;

use App\Models\Task; // Pastikan model Task di-import
 main
use Illuminate\Http\Request;

class TaskController extends Controller
{
 feature/read-delete-task
    // Mengambil semua data dari database dan mengirimnya ke view
    public function index()
    {
        $tasks = Task::all();
        return view('todo', compact('tasks'));
    }

    // Mencari data berdasarkan ID, lalu menghapusnya
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

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
main
        return back();
    }
}