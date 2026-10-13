<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>

    <fieldset>
        <legend>Informasi Buku</legend>

        <p>
            <strong>Judul Buku:</strong>
            {{ $book->title }}
        </p>

        <p>
            <strong>Penulis:</strong>
            {{ $book->author }}
        </p>

        <p>
            <strong>Tahun Terbit:</strong>
            {{ $book->year }}
        </p>

        <p>
            <strong>Stok:</strong>
            {{ $book->stock }}
        </p>
    </fieldset>

    <p>
        <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    </p>
</body>
</html>