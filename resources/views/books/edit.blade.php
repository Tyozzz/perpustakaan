<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}" required><br>

        <label for="author">Penulis</label>
        <input type="text" name="author" id="author" value="{{ $book->author }}" required><br>

        <label for="year">Tahun</label>
        <input type="number" name="year" id="year" value="{{ $book->year }}" required><br>

        <label for="description">Deskripsi</label>
        <textarea name="description" id="description">{{ $book->description }}</textarea><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
