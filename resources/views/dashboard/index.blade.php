@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        .card-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(43, 76, 126, 0.08);
            border: 1px solid var(--denim-border);
        }

        .header-section {
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--denim-light);
        }

        .header-section h2 {
            color: var(--denim-dark);
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .header-section p {
            color: #4A5568;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .stats-title {
            color: var(--denim-dark);
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.25rem;
        }

        .stat-card {
            background-color: var(--denim-light);
            border: 1px solid var(--denim-border);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(43, 76, 126, 0.12);
        }

        .stat-card .number {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--denim-primary);
            margin-bottom: 0.35rem;
        }

        .stat-card .label {
            color: var(--denim-dark);
            font-weight: 600;
            font-size: 0.9rem;
        }
    </style>

    <div class="card-container">
        <div class="header-section">
            <h2>Dashboard</h2>
            <p>Selamat datang di Library System.</p>
            <p style="margin-top: 0.4rem;">
                Library System adalah sistem informasi perpustakaan sederhana
                yang digunakan untuk menampilkan data buku, member, dan kategori
                dalam satu sistem.
            </p>
        </div>

        <h3 class="stats-title">Data Perpustakaan</h3>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="number">{{ $bookCount }}</div>
                <div class="label">Jumlah Buku</div>
            </div>

            <div class="stat-card">
                <div class="number">{{ $memberCount }}</div>
                <div class="label">Jumlah Member</div>
            </div>

            <div class="stat-card">
                <div class="number">{{ $categoryCount }}</div>
                <div class="label">Jumlah Kategori</div>
            </div>
        </div>
    </div>
@endsection