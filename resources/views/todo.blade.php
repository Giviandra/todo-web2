<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Kolaborasi</title>
</head>
<body>
    <h2>Aplikasi To-Do List</h2>
    
    <!-- Bagian Kamu: Fitur Create [POST] -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="task" placeholder="Ketik tugas baru..." required>
        <button type="submit">Tambah</button>
    </form>
    
    <hr>
    <!-- Nanti partnermu akan menambahkan tabel Read dan Delete di bawah garis ini -->
    <p><i>Daftar tugas akan ditampilkan di sini oleh Anggota 2...</i></p>
    
</body>
</html>