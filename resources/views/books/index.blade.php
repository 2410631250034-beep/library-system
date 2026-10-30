@extends('layouts.app')

@section('title', 'Daftar Buku - Library System')

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--denim-light);
        }

        .header-section h1 {
            color: var(--denim-dark);
            font-size: 1.6rem;
            font-weight: 700;
        }

        .header-section p {
            color: #718096;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-add {
            display: inline-block;
            background-color: var(--denim-primary);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .btn-add:hover {
            background-color: var(--denim-dark);
            transform: translateY(-1px);
        }

        .table-responsive {
            overflow-x: auto;
            margin-top: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: var(--denim-primary);
            color: white;
            text-align: left;
            padding: 12px 16px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--denim-border);
            font-size: 0.9rem;
            color: var(--text-main);
        }

        tr:hover {
            background-color: var(--denim-light);
        }

        .category-badge {
            background-color: var(--denim-light);
            color: var(--denim-dark);
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .action-link {
            color: var(--denim-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .action-link:hover {
            text-decoration: underline;
        }

        .btn-delete {
            background: none;
            border: none;
            color: var(--danger);
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .btn-delete:hover {
            text-decoration: underline;
        }

        .empty-state {
            text-align: center;
            color: #718096;
            padding: 2.5rem 0;
            font-size: 0.95rem;
        }
    </style>

    <div class="card-container">
        <div class="header-section">
            <div>
                <h1>Daftar Buku</h1>
                <p>Berikut adalah daftar buku yang tersedia dalam sistem perpustakaan.</p>
            </div>
            
            <a href="{{ route('books.create') }}" class="btn-add">+ Tambah Buku</a>
        </div>

        @if ($books->isEmpty())
            <p class="empty-state">Belum ada data buku.</p>
        @else
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $book->title }}</strong></td>
                                <td>{{ $book->author }}</td>
                                <td>
                                    <span class="category-badge">
                                        {{ $book->category?->name ?? 'Belum ada kategori' }}
                                    </span>
                                </td>
                                <td>{{ $book->year }}</td>
                                <td>
                                    <span style="font-weight: 600; color: {{ $book->stock > 0 ? 'var(--denim-primary)' : 'var(--danger)' }}">
                                        {{ $book->stock }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('books.show', $book) }}" class="action-link">Detail</a>
                                    <span style="color: #CBD5E0; margin: 0 4px;">|</span>
                                    <a href="{{ route('books.edit', $book) }}" class="action-link">Edit</a>
                                    <span style="color: #CBD5E0; margin: 0 4px;">|</span>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus buku ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection