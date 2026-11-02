@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<style>
    .form-container {
        background-color: white;
        padding: 2.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        max-width: 600px;
        margin: 0 auto;
        border: 1px solid var(--denim-border);
    }
    .form-header {
        margin-bottom: 2rem;
        border-bottom: 1px solid var(--denim-border);
        padding-bottom: 1rem;
    }
    .form-header h3 {
        color: var(--denim-dark);
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
    }
    .form-header p {
        color: #718096;
        font-size: 0.95rem;
    }
    .form-group {
        margin-bottom: 1.25rem;
    }
    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--text-main);
        font-size: 0.9rem;
    }
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #CBD5E0;
        border-radius: 6px;
        font-size: 0.95rem;
        font-family: inherit;
        transition: all 0.2s;
        background-color: #FAFCFF;
    }
    .form-control:focus {
        outline: none;
        border-color: var(--denim-primary);
        box-shadow: 0 0 0 3px rgba(43, 76, 126, 0.15);
        background-color: white;
    }
    .error-message {
        color: var(--danger, #E53E3E);
        font-size: 0.85rem;
        margin-top: 0.35rem;
        font-weight: 500;
    }
    .button-group {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }
    .btn-primary {
        background-color: var(--denim-primary);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s, transform 0.1s;
    }
    .btn-primary:hover {
        background-color: var(--denim-dark);
        transform: translateY(-1px);
    }
    .btn-secondary {
        background-color: #EDF2F7;
        color: #4A5568;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        transition: background-color 0.2s;
    }
    .btn-secondary:hover {
        background-color: #E2E8F0;
        color: #2D3748;
    }
</style>

<div class="form-container">
    <div class="form-header">
        <h3>Edit Buku</h3>
        <p>Perbarui informasi buku yang dipilih.</p>
    </div>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title" class="form-label">Judul Buku</label>
            <input id="title" type="text" name="title" class="form-control"
                value="{{ old('title', $book->title) }}" required>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="author" class="form-label">Penulis</label>
            <input id="author" type="text" name="author" class="form-control"
                value="{{ old('author', $book->author) }}" required>
            @error('author')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" id="category_id" class="form-control">
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
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input id="year" type="number" name="year" class="form-control"
                value="{{ old('year', $book->year) }}" min="1" max="9999" required>
            @error('year')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock" class="form-label">Stok Buku</label>
            <input id="stock" type="number" name="stock" class="form-control"
                value="{{ old('stock', $book->stock) }}" min="0" required>
            @error('stock')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="button-group">
            <button type="submit" class="btn-primary">Simpan Perubahan</button>
            <a href="{{ route('books.index') }}" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection