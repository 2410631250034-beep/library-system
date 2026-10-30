<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Library System</title>

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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1.5rem;
        }

        .login-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 24px rgba(43, 76, 126, 0.12);
            border: 1px solid var(--denim-border);
        }

        .login-card h1 {
            color: var(--denim-dark);
            margin-bottom: 0.5rem;
            font-size: 1.6rem;
            text-align: center;
            font-weight: 700;
        }

        .login-card p.subtitle {
            color: #718096;
            font-size: 0.875rem;
            text-align: center;
            margin-bottom: 1.75rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--text-main);
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #CBD5E0;
            border-radius: 8px;
            outline: none;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-group input:focus {
            border-color: var(--denim-primary);
            box-shadow: 0 0 0 3px rgba(43, 76, 126, 0.15);
        }

        .btn-submit {
            width: 100%;
            padding: 0.8rem;
            background-color: var(--denim-primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
            margin-top: 0.5rem;
        }

        .btn-submit:hover {
            background-color: var(--denim-dark);
            transform: translateY(-1px);
        }

        /* Pesan Error Login */
        .alert-error {
            background-color: #FDE8E8;
            color: #9B1C1C;
            border: 1px solid #F8B4B4;
            padding: 0.85rem;
            border-radius: 8px;
            font-size: 0.875rem;
            margin-bottom: 1.25rem;
            line-height: 1.4;
        }

        .alert-error p {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1>Login Sistem Perpustakaan</h1>
        <p class="subtitle">Masukan akun kamu untuk mengakses sistem</p>

        <!-- Menampilkan pesan error jika login gagal -->
        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="admin@example.com" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-submit">Login</button>
        </form>
    </div>

</body>
</html>