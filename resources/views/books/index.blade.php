
@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h1>Daftar Buku</h1>
    <p>Berikut adalah daftar buku yang tersedia.</p>

    <p>
        <a href="{{ route('books.create') }}">Tambah Buku</a>
    </p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($books->isEmpty())
        <p>Belum ada data buku.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            <a href="{{ route('books.show', $book) }}">
                                Detail
                            </a>
                            |
                            <a href="{{ route('books.edit', $book) }}">
                                Edit
                            </a>
                            |
                            <form
                                action="{{ route('books.destroy', $book) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Yakin ingin menghapus buku ini?')"
                                >
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection