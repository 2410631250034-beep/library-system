<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>

    <!-- Font Modern (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --denim-primary: #2B4C7E;
            --denim-dark: #1A3254;
            --denim-light: #EBF2FA;
            --denim-border: #D0E1F9;
            --bg-body: #F8FAFC;
            --text-main: #2D3748;
            --danger: #E53E3E;
            --danger-hover: #C53030;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header / Navbar Styling */
        header {
            background-color: var(--denim-primary);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(43, 76, 126, 0.12);
        }

        header h2 {
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        nav a {
            color: #EBF2FA;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #FFFFFF;
            text-decoration: underline;
        }

        .nav-divider {
            color: rgba(255, 255, 255, 0.4);
        }

        /* Logout Button */
        .btn-logout {
            background-color: var(--danger);
            color: white;
            border: none;
            padding: 0.45rem 0.9rem;
            font-weight: 600;
            font-size: 0.85rem;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-logout:hover {
            background-color: var(--danger-hover);
            transform: translateY(-1px);
        }

        /* Main Content Container */
        main {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            width: 100%;
            flex: 1;
        }

        /* Flash Message Success */
        .alert-success {
            background-color: #DEF7EC;
            color: #03543F;
            border: 1px solid #BCF0DA;
            padding: 0.85rem 1.2rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-weight: 500;
            font-size: 0.95rem;
        }

        /* Footer Styling */
        footer {
            background-color: white;
            border-top: 1px solid var(--denim-border);
            text-align: center;
            padding: 1.2rem;
            margin-top: auto;
            color: #718096;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <header>
        <h2>📚 Library System</h2>

        <nav>
            <a href="{{ route('books.index') }}">Daftar Buku</a>
            <span class="nav-divider">|</span>
            <a href="{{ route('books.create') }}">Tambah Buku</a>

            @auth
                <span class="nav-divider">|</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            @endauth
        </nav>
    </header>

    <main>
        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>Praktikum Pemrograman Web Framework</p>
    </footer>

</body>
</html>