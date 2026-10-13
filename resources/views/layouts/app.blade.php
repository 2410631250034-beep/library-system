
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>
</head>
<body>
    <header>
        <h2>Library System</h2>

        <nav>
            <a href="{{ route('books.index') }}">Daftar Buku</a>
            |
            <a href="{{ route('books.create') }}">Tambah Buku</a>
        </nav>
    </header>

    <hr>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    <hr>

    <footer>
        <p>Praktikum Pemrograman Web Framework</p>
    </footer>
</body>
</html>