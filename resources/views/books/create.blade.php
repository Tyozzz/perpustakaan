<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author">Penulis</label>
        <input type="text" name="author" id="author" required><br>

        <label for="year">Tahun</label>
        <input type="number" name="year" id="year" required><br>

        <label for="description">Deskripsi</label>
        <textarea name="description" id="description"></textarea><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
