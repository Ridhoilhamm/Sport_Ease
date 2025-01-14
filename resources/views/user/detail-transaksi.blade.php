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
            {{-- <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="card-title " style="font-size: 16px">Lapangan: {{ $transaksi->lapangan }}</h5>
                    <p class="card-text mb-0" style="font-size: 12px;">Status: {{ $transaksi->status }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Nama Pemesan: {{ $transaksi->user->name }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Jam Sewa: {{ $transaksi->jam_sewa }}</p>
                    <p class="card-text mb-0" style="font-size: 12px;">Lama Sewa:{{ $transaksi->lama_sewa }}</p>
                    <p class="card-text mt-0" style="font-size: 12px">Tanggal Dibuat: {{ $transaksi->created_at->format('d-m-Y H:i') }}</p> <!-- Format tanggal -->
                </div>
             </div> --}}
             <div class="container ">

                <div class="mt-3 bg-white rounded" style="padding: 10px 0 20px;">
        
                    <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Data Pemesan
                    </p>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Nama Lengkap
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $transaksi->user->name }}
                        </div>
                        <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            {{-- Icon atau tombol lainnya --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Email
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $transaksi->user->email }}
                        </div>
                        <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            {{-- Icon atau tombol lainnya --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Tgl Pemesanan
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $transaksi->tanggal_sewa }} 
                        </div>
                        <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            {{-- Icon atau tombol lainnya --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Jam Dipilih
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $transaksi->jam_sewa }} 
                        </div>
                        <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            {{-- Icon atau tombol lainnya --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Lama Sewa
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $transaksi->lama_sewa }} Jam
                        </div>
                        <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            {{-- Icon atau tombol lainnya --}}
                        </div>
                    </div>
        
                </div>
                <div class="mt-2 bg-white rounded" style="padding: 10px 0 20px;">

                    <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Detail Pesanan
                        {{-- <p>Sewa</p> --}}
                        <div class="mt-3 container">
                            <div>
                                <div class="d-flex">
                                    <!-- Mengakses foto lapangan -->
                                    {{-- {{ dd($transaksi->lapangans->name) }} --}}
                                    <img src="{{ asset('storage/' . $transaksi->getlapangan->foto) }}" style="height: 90px; width:90px"
                                        class="img-fluid rounded me-3" alt="Produk">
                                    <div>

                                        <!-- Mengakses nama lapangan -->
                                        <h6 class="mb-1"> {{ $transaksi->getlapangan->name }}</h6>
                                        <small class="text-muted " style="font-size:12px">Sewa Untuk Tanggal {{ $transaksi->tanggal_sewa }}  </small> <br/>
                                        <small class="text-muted" style="font-size:12px">Jam Sewa {{ $transaksi->jam_sewa }} </small> <br/>
                                        <small class="text-muted" style="font-size:12px">Lama Sewa {{ $transaksi->lama_sewa }}  Jam</small>
                                        {{-- <p class="fw-bold mt-1" style="color: #101010c2">Rp. {{ number_format($transaksi->getlapangans->harga, 0, ',', '.') }}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
        
                </div>
                <div class=" mt-2 bg-white rounded">
                    <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-top: 10px; padding-bottom:10px">Detail Pesanan</p>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Biaya Lapangan
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            Rp. {{ number_format($transaksi->getlapangan->harga * $transaksi->lama_sewa, 0, ',', '.') }}

                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Biaya Aplikasi
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            Rp.1.000
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Biaya Admin
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            Rp.1.000
                        </div>
    
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Motade Pembayaran
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            Bca 
                        </div>
    
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                            Nomer Rekening
                        </p>
                        <div class="ms-auto" style="font-size:14px">
                            122333478
                        </div>
    
                    </div>
                    <div class="d-flex align-items-center container border-top">
                        <p class="fw-bold mb-0 mt-2  " style="flex: 1; font: size 16px; padding-bottom: 5px; color:#A9DA05">
                            Total Pembayaran
                        </p>
                        <div class="ms-auto fw-bold " style="font-size:16px;color:#A9DA05; padding-top">
                            Rp. {{ number_format($transaksi->getlapangan->harga * $transaksi->lama_sewa, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p class="text-center mt-4">Transaksi tidak ditemukan.</p>
        @endif
    </div>
</div>
@endsection

@php
    $hideNavbar = true; 
    $hideFooter = true; 
@endphp