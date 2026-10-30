@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <style>
        .card-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(43, 76, 126, 0.08);
            border: 1px solid var(--denim-border);
            max-width: 650px;
            margin: 0 auto;
        }

        .header-section {
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

        fieldset {
            border: 1px solid var(--denim-border);
            border-radius: 8px;
            padding: 1.25rem 1.5rem;
            background-color: #FAFCFF;
        }

        legend {
            font-weight: 600;
            color: var(--denim-primary);
            padding: 0 8px;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.35rem;
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 0.7rem 0.85rem;
            border: 1px solid #CBD5E0;
            border-radius: 8px;
            outline: none;
            font-size: 0.9rem;
            background-color: white;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--denim-primary);
            box-shadow: 0 0 0 3px rgba(43, 76, 126, 0.15);
        }

        .error-message {
            color: var(--danger);
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 0.25rem;
            display: block;
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .btn-submit {
            background-color: var(--denim-primary);
            color: white;
            padding: 0.7rem 1.4rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-submit:hover {
            background-color: var(--denim-dark);
            transform: translateY(-1px);
        }

        .btn-cancel {
            color: #718096;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .btn-cancel:hover {
            color: var(--text-main);
            text-decoration: underline;
        }
    </style>

    <div class="card-container">
        <div class="header-section">
            <h1>Tambah Buku</h1>
            <p>Silakan isi formulir berikut untuk menambahkan buku.</p>
        </div>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <fieldset>
                <legend>Informasi Buku</legend>

                <div class="form-group">
                    <label for="title">Judul Buku:</label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        required
                    >
                    @error('title')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author">Penulis:</label>
                    <input
                        type="text"
                        id="author"
                        name="author"
                        class="form-control"
                        value="{{ old('author') }}"
                        required
                    >
                    @error('author')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Kategori:</label>
                    <select name="category_id" id="category_id" class="form-control">
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
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="year">Tahun Terbit:</label>
                    <input
                        type="number"
                        id="year"
                        name="year"
                        class="form-control"
                        value="{{ old('year') }}"
                        min="1"
                        max="9999"
                        required
                    >
                    @error('year')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="stock">Stok Buku:</label>
                    <input
                        type="number"
                        id="stock"
                        name="stock"
                        class="form-control"
                        value="{{ old('stock') }}"
                        min="0"
                        required
                    >
                    @error('stock')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan Buku</button>
                    <a href="{{ route('books.index') }}" class="btn-cancel">Kembali</a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection