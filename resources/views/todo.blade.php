<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>To-Do List Kolaborasi</title>
</head>
<body>
    <h2>Aplikasi To-Do List</h2>
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
</body>
</html>