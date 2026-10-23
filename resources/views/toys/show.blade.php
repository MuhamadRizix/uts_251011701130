@extends('layouts.app')

@section('title', $toy->name . ' | Rizix Toys')

@section('content')

<a href="{{ route('toys.index') }}"
   class="text-decoration-none fw-semibold">
    ← Kembali ke daftar mainan
</a>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden mt-4">
    <div class="row g-0">
        <div class="col-lg-6">
            <img
                src="{{ asset($toy->image) }}"
                alt="{{ $toy->name }}"
                class="w-100 h-100"
                style="min-height:320px; max-height:540px; object-fit:cover;"
                onerror="this.onerror=null;this.src='https://placehold.co/800x700/e9eafe/4247a9?text=Mainan+Anak';"
            >
        </div>

        <div class="col-lg-6">
            <div class="p-4 p-lg-5">
                <span class="category-pill">
                    {{ $toy->category }}
                </span>

                <h1 class="fw-bold mt-4">
                    {{ $toy->name }}
                </h1>

                <p class="text-secondary">
                    Rekomendasi usia: {{ $toy->age_group }}
                </p>

                <div class="price display-6 my-4">
                    Rp{{ number_format((float) $toy->price, 0, ',', '.') }}
                </div>

                <h5 class="fw-bold">Deskripsi Produk</h5>

                <p class="text-secondary lh-lg">
                    {{ $toy->description }}
                </p>

                <div class="alert alert-light border rounded-3">
                    Informasi produk berasal dari database
                    yang diisi menggunakan Seeder Laravel.
                </div>

                <a href="{{ route('toys.index') }}"
                   class="btn btn-main px-4 py-2">
                    Kembali Belanja
                </a>
            </div>
        </div>
    </div>
</div>

@endsection