@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>
    <p>Silakan isi formulir berikut untuk menambahkan buku.</p>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <fieldset>
            <legend>Informasi Buku</legend>

            <p>
                <label for="title">Judul Buku:</label><br>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    required
                >
                @error('title')
                    <br>{{ $message }}
                @enderror
            </p>

            <p>
                <label for="author">Penulis:</label><br>
                <input
                    type="text"
                    id="author"
                    name="author"
                    value="{{ old('author') }}"
                    required
                >
                @error('author')
                    <br>{{ $message }}
                @enderror
            </p>

            <p>
                <label for="category_id">Kategori:</label><br>
                <select name="category_id" id="category_id">
                    <option value="">Pilih kategori</option>

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            @selected(old('category_id') == $category->id)
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <br>{{ $message }}
                @enderror
            </p>

            <p>
                <label for="year">Tahun Terbit:</label><br>
                <input
                    type="number"
                    id="year"
                    name="year"
                    value="{{ old('year') }}"
                    min="1"
                    max="9999"
                    required
                >
                @error('year')
                    <br>{{ $message }}
                @enderror
            </p>

            <p>
                <label for="stock">Stok Buku:</label><br>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    value="{{ old('stock') }}"
                    min="0"
                    required
                >
                @error('stock')
                    <br>{{ $message }}
                @enderror
            </p>

            <button type="submit">Simpan Buku</button>
            <a href="{{ route('books.index') }}">Kembali</a>
        </fieldset>
    </form>
@endsection
