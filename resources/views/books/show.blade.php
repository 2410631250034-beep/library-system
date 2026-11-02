@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<style>
    .detail-container {
        background-color: white;
        padding: 2.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        max-width: 600px;
        margin: 0 auto;
        border: 1px solid var(--denim-border);
    }
    .detail-header {
        margin-bottom: 1.5rem;
        border-bottom: 1px solid var(--denim-border);
        padding-bottom: 1rem;
    }
    .detail-header h3 {
        color: var(--denim-dark);
        font-size: 1.5rem;
    }
    .detail-group {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 2rem;
    }
    .detail-item {
        display: flex;
        justify-content: space-between;
        padding: 0.75rem 0;
        border-bottom: 1px dashed #E2E8F0;
    }
    .detail-item:last-child {
        border-bottom: none;
    }
    .detail-label {
        font-weight: 600;
        color: #4A5568;
        font-size: 0.95rem;
    }
    .detail-value {
        color: var(--text-main);
        font-size: 0.95rem;
        font-weight: 500;
    }
    .badge-category {
        background-color: var(--denim-light);
        color: var(--denim-primary);
        padding: 0.2rem 0.6rem;
        border-radius: 4px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .button-group {
        display: flex;
        gap: 1rem;
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
    .btn-warning {
        background-color: #D69E2E;
        color: white;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        transition: background-color 0.2s;
    }
    .btn-warning:hover {
        background-color: #B7791F;
    }
</style>

<div class="detail-container">
    <div class="detail-header">
        <h3>Informasi Buku</h3>
    </div>

    <div class="detail-group">
        <div class="detail-item">
            <span class="detail-label">Judul Buku</span>
            <span class="detail-value">{{ $book->title }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Penulis</span>
            <span class="detail-value">{{ $book->author }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Kategori</span>
            <span class="detail-value">
                <span class="badge-category">{{ $book->category->name ?? '-' }}</span>
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tahun Terbit</span>
            <span class="detail-value">{{ $book->year }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Stok Buku</span>
            <span class="detail-value">{{ $book->stock }} pcs</span>
        </div>
    </div>

    <div class="button-group">
        <a href="{{ route('books.index') }}" class="btn-secondary">Kembali</a>
        <a href="{{ route('books.edit', $book) }}" class="btn-warning">Edit Buku</a>
    </div>
</div>
@endsection