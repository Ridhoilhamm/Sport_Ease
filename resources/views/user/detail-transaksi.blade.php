@extends('user.layout')

@section('content')
<div class="container my-4">
    <!-- Bagian Header -->
    <div id="header-container" class="fixed-top bg-white shadow-sm">
        <div id="header" class="d-flex align-items-center p-3 w-100">
            <!-- Tombol Kembali -->
            <a href="/user" id="row" class="btn btn-light rounded-circle p-2 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </a>
            <p class="ms-3 mb-0 fw-bold">Detail Transaksi</p>
        </div>
    </div>

    <!-- Tambahkan margin-top untuk mengimbangi tinggi header -->
    <div class="mt-5 pt-3">
        <!-- Pesan Kesalahan -->
        @if (session('error'))
            <div class="alert alert-danger mt-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Detail Transaksi -->
        @if (isset($transaksi))
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="card-title " style="font-size: 16px">Lapangan: {{ $transaksi->lapangan }}</h5>
                    <p class="card-text mb-0" style="font-size: 12px;">Status: {{ $transaksi->status }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Nama Pemesan: {{ $transaksi->user->name }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Jam Sewa: {{ $transaksi->jam_sewa }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Lama Sewa:{{ $transaksi->lama_sewa }}</p>
                    <p class="card-text mt-0" style="font-size: 12px">Tanggal Dibuat: {{ $transaksi->created_at->format('d-m-Y H:i') }}</p> <!-- Format tanggal -->
                </div>
             </div>
        @else
            <p class="text-center mt-4">Transaksi tidak ditemukan.</p>
        @endif
    </div>
</div>
@endsection

@php
    $hideNavbar = true; // Jika memang variabel ini diperlukan oleh layout
    $hideFooter = true; // Pindahkan ke atas sebelum @section jika perlu
@endphp
