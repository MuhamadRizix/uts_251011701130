@extends('layouts.app')

@section('title', 'Rizix Toys | Toko Mainan Anak')

@section('content')

{{-- BAGIAN HERO --}}
<section class="hero mb-5 p-4 p-lg-5 rounded-4">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <span class="badge bg-light text-primary rounded-pill p-2">
                ✨ KOLEKSI MAINAN ANAK
            </span>

            <h1 class="display-5 fw-bold mt-4">
                Bermain Seru,<br>Belajar Setiap Hari!
            </h1>

            <p class="lead text-white-50 mt-3">
                Temukan mainan pilihan untuk menemani anak
                berkreasi, belajar, dan mengembangkan imajinasi.
            </p>

            <a href="#daftar-mainan"
               class="btn btn-light rounded-3 fw-semibold mt-2">
                Lihat Koleksi
            </a>
        </div>

        <div class="col-lg-4 text-center mt-4 mt-lg-0">
            <div style="font-size: 100px;">🧸 🚗 🪁</div>
            <p class="text-white-50">Seru untuk setiap usia!</p>
        </div>
    </div>
</section>

{{-- DAFTAR PRODUK --}}
<section id="daftar-mainan">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-primary fw-bold small mb-1">
                KOLEKSI KAMI
            </p>

            <h2 class="fw-bold">Mainan Pilihan</h2>

            <p class="text-secondary">
                Pilih mainan favorit untuk si kecil.
            </p>
        </div>

        <span class="badge bg-white text-dark border rounded-pill p-3">
            {{ $toys->count() }} Produk
        </span>
    </div>

    <div class="row g-4">

        @forelse ($toys as $toy)

            <div class="col-12 col-sm-6 col-lg-3">

                <div class="card toy-card h-100 shadow-sm border-0 rounded-4 overflow-hidden">

                    {{-- FOTO PRODUK --}}
                    <div class="bg-white d-flex align-items-center justify-content-center p-3"
                         style="height: 220px;">

                        <img
                            src="{{ asset($toy->image) }}"
                            alt="{{ $toy->name }}"
                            class="img-fluid"
                            style="max-height: 100%; max-width: 100%; object-fit: contain;"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/e9eafe/4247a9?text=Foto+Mainan';"
                        >

                    </div>

                    {{-- INFORMASI PRODUK --}}
                    <div class="card-body p-4 d-flex flex-column">

                        <div class="mb-3">
                            <span class="category-pill">
                                {{ $toy->category }}
                            </span>
                        </div>

                        <h5 class="fw-bold">
                            {{ $toy->name }}
                        </h5>

                        <p class="text-secondary small mb-2">
                            Usia {{ $toy->age_group }}
                        </p>

                        <p class="price fw-bold text-primary fs-5 mt-auto mb-3">
                            Rp{{ number_format((float) $toy->price, 0, ',', '.') }}
                        </p>

                        <a href="{{ route('toys.show', $toy) }}"
                           class="btn btn-main w-100 py-2">
                            Lihat Detail
                        </a>

                    </div>
                </div>

            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-warning rounded-3">
                    <h5>Data mainan belum tersedia.</h5>
                    <p class="mb-0">
                        Jalankan perintah
                        <code>php artisan db:seed</code>
                        melalui terminal VS Code.
                    </p>
                </div>
            </div>

        @endforelse

    </div>
</section>

@endsection