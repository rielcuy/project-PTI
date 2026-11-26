@extends('layouts.app')

@section('title', 'Dashboard - Toko Sepatu')

@section('content')
<div class="mb-4">
    <h3 class="fw-bold mb-1">Selamat Datang, {{ Auth::user()->name }}</h3>
    <p class="text-muted">Sistem Manajemen Inventaris & Penjualan Toko Sepatu</p>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h6 class="text-muted">Total Kategori Sepatu</h6>
                <h2 class="fw-bold">{{ $totalCategories }}</h2>
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-dark mt-2">
                    Kelola Kategori
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h6 class="text-muted">Admin Terdaftar</h6>
                <h2 class="fw-bold">{{ $totalUsers }}</h2>
                <span class="badge bg-success mt-2">Aktif</span>
            </div>
        </div>
    </div>
</div>
@endsection