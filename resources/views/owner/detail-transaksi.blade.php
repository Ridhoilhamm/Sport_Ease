@extends('owner.layout')

@section('content')
    <div class=" my-2">
        <!-- Bagian Header -->
        <div id="header-container" class="fixed-top bg-white shadow-sm">
            <div id="header" class="d-flex align-items-center justify-content-between p-3 w-100">
                <!-- Tombol Kembali -->
                <a href="/owner" id="row" class="btn btn-light rounded-circle p-2 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left ">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>
                <!-- Teks judul -->
                <p class="mb-0 fw-bold mx-auto ms-3" style="flex: 1;">Detail Transaksi</p>
                <!-- Placeholder untuk mengimbangi posisi ikon kembali -->
                <div class="invisible btn btn-light rounded-circle p-2 shadow"></div>
            </div>
        </div>
        
        {{-- @livewire('bukti-pembayaran':transaksiId="$transaksi->id", ['status' => 'menunggu hari']) --}}
        {{-- <livewire:bukti-pembayaran :transaksi-id="$transaksi->id" :transaksi-status="$transaksiStatus" /> --}}


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
                <div class=" ">
                    @php
                    \Carbon\Carbon::setLocale('id');
               @endphp

                    <div class="mt-3 bg-white rounded" style="padding: 10px 0 20px;">

                        <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">
                            Data Pemesan
                        </p>
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-0 mt-2" style="flex: 1; font-size:14px; padding-bottom: 5px;">
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
                                Tgl.Pemesanan
                            </p>
                            <div class="ms-auto" style="font-size:14px">
                                {{ \Carbon\Carbon::parse($transaksi->tanggal_sewa)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
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
                                {{ $transaksi->jam_sewa }} WIB
                            </div>
                            <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                                {{-- Icon atau tombol lainnya --}}
                            </div>
                        </div>
                       

                    </div>
                   
                    <div class="mt-2 bg-white rounded" style="padding: 10px 0 20px;">

                        <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">
                            Detail Lapangan
                            {{-- <p>Sewa</p> --}}
                        <div class="mt-3 container">
                            <div>
                                <div class="d-flex">
                                    @php
                                         \Carbon\Carbon::setLocale('id');
                                    @endphp
                                    <!-- Mengakses foto lapangan -->
                                    {{-- {{ dd($transaksi->lapangans->name) }} --}}
                                    <img src="{{ asset('storage/' . $transaksi->getlapangan->foto) }}"
                                        style="height: 90px; width:90px" class="img-fluid rounded me-3" alt="Produk">
                                    <div>
                                        <!-- Mengakses nama lapangan -->
                                        <h6 class="mb-1"> {{ $transaksi->getlapangan->name }}</h6>
                                        <small class="text-muted " style="font-size:12px">Tgl.Sewa
                                            {{ \Carbon\Carbon::parse($transaksi->tanggal_sewa)->locale('id')->isoFormat('dddd, D MMMM YYYY') }} </small> <br />
                                        <small class="text-muted" style="font-size:12px">Jam Sewa {{ $transaksi->jam_sewa }} WIB
                                        </small> <br />
                                        <h6> Rp.{{ number_format($transaksi->getlapangan->harga, 0, ',', '.') }}</h6>
                                        
                                           
                                        {{-- <p class="fw-bold mt-1" style="color: #101010c2">Rp. {{ number_format($transaksi->getlapangans->harga, 0, ',', '.') }}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    


                    <div class=" mt-2 bg-white rounded" style="padding-bottom:10px;">
                        <p class=" text-secondary container mb-0 mt-0 border-bottom"
                            style="padding-top: 10px; padding-bottom:10px; font-size:16px;"> Pembayaran </p>
                       
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-0 mt-2 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                                Motade Pembayaran
                            </p>
                            <div class="ms-auto" style="font-size:14px">
                                Transfer
                            </div>

                        </div>
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-0 mt-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                                Nama Bank
                            </p>
                            <div class="ms-auto" style="font-size:14px">
                                Bca
                            </div>

                        </div>
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-1" style="flex: 1; font-size:14px;">No.Rekening</p>
                            <div class="ms-auto d-flex justify-between" style="font-size:14px">
                                
                                <svg id="copy-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                    <path
                                        d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                                </svg>
                                <p>
                                    122333444
                                </p>
                            </div>
                        </div>
    
    
                        <!-- Custom Alert -->
                        <div id="custom-alert" class="alert alert-success" style="display: none;">
                            <strong>Success!</strong> Nomor rekening berhasil disalin!
                        </div>
    
                        <!-- Script untuk Menyalin Nomor dan Menampilkan Custom Alert -->
                        <script>
                            document.getElementById('copy-icon').addEventListener('click', function() {
                                // Salin nomor rekening ke clipboard
                                const textToCopy = '122333444'; // Ganti dengan nomor rekening yang sesuai
                                navigator.clipboard.writeText(textToCopy)
                                    .then(() => {
                                        // Tampilkan alert setelah berhasil menyalin
                                        const alert = document.createElement('div');
                                        alert.className = 'alert';
                                        alert.textContent = 'Nomor rekening berhasil disalin!';
                                        document.body.appendChild(alert);
    
                                        // Ganti warna ikon menjadi hijau
                                        document.getElementById('copy-icon').classList.add('icon-success');
    
                                        // Hapus alert setelah beberapa detik
                                        setTimeout(() => {
                                            alert.remove();
                                        }, 3000);
                                    })
                                    .catch(() => {
                                        alert('Gagal menyalin nomor rekening');
                                    });
                            });
                        </script>
    
                        <!-- Custom CSS untuk Alert -->
                        <style>
                            .alert {
                                position: fixed;
                                top: 450px;
                                left: 50%;
                                transform: translateX(-50%);
                                padding: 15px;
                                font-size: 14px;
                                border-radius: 5px;
                                background-color: #28a746af;
                                color: white;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                z-index: 1050;
                                transition: opacity 0.5s ease;
                            }
    
                            /* .icon-success {
    
                                /* Hijau setelah berhasil */
                                /* stroke: #28a745; */
                            /* } */ */
                        </style>
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                                Atas Nama
                            </p>
                            <div class="ms-auto" style="font-size:14px">
                                Sport Ease
                            </div>

                        </div>
                        
                    </div>
                    <div class=" mt-2 bg-white rounded" style="padding-bottom:10px;">
                        <p class=" text-secondary container mb-0 mt-0 border-bottom"
                            style="padding-top: 10px; padding-bottom:10px; font-size:16px;">Detail Pembayaran </p>
                        <div class="d-flex align-items-center container">
                            <p class="fw-medium mb-0 mt-2 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                                Biaya Lapangan
                            </p>
                            <div class="ms-auto" style="font-size:14px">
                                Rp.
                                {{ number_format($transaksi->getlapangan->harga *2, 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="d-flex align-items-center container" >
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
                        
                        <div class="d-flex align-items-center container border-top">
                            <p class="fw-bold mb-0 mt-2" style="font-size:15px; padding-bottom: 5px; color:#A9DA05">
                                Total Pembayaran
                            </p>
                            <div class="ms-auto fw-bold " style="font-size:16px;color:#A9DA05; padding-top">
                                Rp.
                                {{ number_format($transaksi->getlapangan->harga * 2+2000, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>

                </div>
            @else
                <p class="text-center mt-4">Transaksi tidak ditemukan.</p>
            @endif
        </div>
        

       
        
        

    </div>


        <livewire:bukti-pembayaran :transaksiId="$transaksi->id" />


@endsection

@php
    $hideSidebar = true;
    $hideNavbar = true;
@endphp
