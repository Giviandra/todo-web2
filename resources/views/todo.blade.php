<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
feature/read-delete-task

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 main
    <title>To-Do List Kolaborasi</title>
</head>
<body>
    <h2>Aplikasi To-Do List</h2>
 feature/read-delete-task
    <hr>

    <!-- Fitur Read [GET] -->
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tugas</th>
            <th>Aksi</th>
        </tr>
        @foreach($tasks as $index => $task)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $task->task }}</td>
            <td>
                <!-- Fitur Delete [DELETE] -->
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus tugas ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    
    <!-- Bagian Kamu: Fitur Create [POST] -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="task" placeholder="Ketik tugas baru..." required>
        <button type="submit">Tambah</button>
    </form>
    
    <hr>
    <!-- Nanti partnermu akan menambahkan tabel Read dan Delete di bawah garis ini -->
    <p><i>Daftar tugas akan ditampilkan di sini oleh Anggota 2...</i></p>
    
 main
</body>
</html>