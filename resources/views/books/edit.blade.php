
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="card">
    <h1>Edit Buku</h1>
    <p>Perbarui informasi buku yang dipilih.</p>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Judul Buku</label>
        <input id="title" type="text" name="title"
            value="{{ old('title', $book->title) }}" required>
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="author">Penulis</label>
        <input id="author" type="text" name="author"
            value="{{ old('author', $book->author) }}" required>
        @error('author')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="category_id">Kategori</label>
        <select name="category_id" id="category_id">
            <option value="">-- Pilih Kategori --</option>

            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id', $book->category_id) == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <p class="error">{{ $message }}</p>
        @enderror


        <label for="year">Tahun Terbit</label>
        <input id="year" type="number" name="year"
            value="{{ old('year', $book->year) }}"
            min="1" max="9999" required>
        @error('year')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="stock">Stok Buku</label>
        <input id="stock" type="number" name="stock"
            value="{{ old('stock', $book->stock) }}"
            min="0" required>
        @error('stock')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}" class="btn secondary">
            Batal
        </a>
    </form>
</div>
@endsection
