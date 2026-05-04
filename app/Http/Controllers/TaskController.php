<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
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
        return back();
    }
}