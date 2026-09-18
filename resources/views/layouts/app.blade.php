<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Library System')</title>
</head>
<body>

    <header>
        <h1>Library System</h1>
    </header>

    <nav>
        <a href="/dashboard">Dashboard</a> |
        <a href="/books">Books</a> |
        <a href="/categories">Categories</a> |
        <a href="/members">Members</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Library System - Abelia Yustika</p>
    </footer>

</body>
</html>