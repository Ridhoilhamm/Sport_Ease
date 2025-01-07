@extends('user.layout')

@section('styles')
    <style>
        .custom-button {
            font-size: 18px;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-item img {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .bank-option {
            cursor: pointer;
            transition: transform 0.2s ease;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bank-option:hover {
            transform: scale(1.2);
            background-color: #0000001e;
            border-radius: 15px;
            padding: 5px;
        }


        /* Label di tengah dropdown */
        .select2-container--default .select2-selection--single {
            height: 50px;
            display: flex;
            align-items: center;
            text-align: center;
            background-color: #333;
            color: #A9DA05;
            font-size: 18px;
            font-weight: bold;
            border: 2px solid #A9DA05;
            border-radius: 10px;
            padding: 0;
            cursor: pointer;
        }

        .select2-container--default .select2-selection--single:hover {
            background-color: #222;
        }


        .select2-container--default .select2-results__option {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #242424;
            color: #A9DA05;
            padding: 10px;
            font-size: 14px;
            border-bottom: 1px solid #333;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #333;
            color: #A9DA05;
        }


        /* Gaya untuk opsi terpilih */
        .select2-container--default .select2-selection__rendered {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #A9DA05;
            font-size: 15px;
        }

        .select2-container--default .select2-selection__rendered img {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* .select2-search--dropdown {
                display: block;
                padding: 4px;
                background-color: #bfa946;
            } */

        .select2-container--default .select2-results__options::-webkit-scrollbar {
            width: 8px;
            background-color: #333;
        }

        .select2-container--default .select2-results__options::-webkit-scrollbar-thumb {
            background-color: #cfaf4b;
            border-radius: 5px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            margin-left: -10px;
            margin-top: -2px;
            position: absolute;
            top: 23px;
            width: 0;
        }

        .bank-option {
            cursor: pointer;
            transition: transform 0.2s ease;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bank-option:hover {
            transform: scale(1.2);
            background-color: #efeaeae3;
            border-radius: 15px;
            padding: 5px;
        }


        /* Label di tengah dropdown */
        .select2-container--default .select2-selection--single {
            height: 50px;
            display: flex;
            align-items: center;
            text-align: center;
            background-color: #ebe5e5;
            color: #a8da05;
            font-size: 18px;
            font-weight: bold;
            border: 2px solid #a8da05;
            border-radius: 10px;
            padding: 0;
            cursor: pointer;
        }

        .select2-container--default .select2-selection--single:hover {
            background-color: #efebeb;
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #999;
            /* Gaya warna placeholder */
            font-style: italic;
            /* Menambahkan gaya font italic */
        }


        /* .select2-container--default .select2-search--dropdown .select2-search__field {
                border: 1px solid #dddddd;
                background-color: #ede9e9;
            } */

        .select2-container--default .select2-results__option {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #ede3e3;
            color: #0c0c0cf1;
            padding: 10px;
            font-size: 14px;
            border-bottom: 1px solid #333;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #e7dede;
            color: #A9DA05;
        }


        /* Gaya untuk opsi terpilih */
        .select2-container--default .select2-selection__rendered {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #A9DA05;
            font-size: 15px;
        }

        .select2-container--default .select2-selection__rendered img {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* .select2-search--dropdown {
                display: block;
                padding: 4px;
                background-color: #A9DA05;
                
            } */

        .select2-container--default .select2-results__options::-webkit-scrollbar {
            width: 8px;
            background-color: #333;
        }

        .select2-container--default .select2-results__options::-webkit-scrollbar-thumb {
            background-color: #A9DA05;
            border-radius: 5px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            margin-left: -10px;
            margin-top: -2px;
            position: absolute;
            top: 23px;
            width: 0;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #101010;
        }

        .custom-swal-popup {
            width: 90%;
            max-width: 600px;
            min-width: 330px;
        }

    </style>
@endsection

@section('content')
    <!-- Header -->
    <div class="mb-1 bg-white rounded" style="padding-bottom: 10px">
        <div class="container" style="padding-top: 10px">
            <div class="mb-2 d-flex align-items-center justify-content-between">
                <a href="/kategory">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left" style="color: black">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </a>
                
                <div style="flex: 1; display: flex; justify-content: center;">
                    <h5 class="fw-medium mt-2">Informasi Pemesanan</h5>
                </div>
            </div>

        </div>

    </div>
    <div>

    </div>
    <div class="container ">

        <div class="mt-3 bg-white rounded" style="padding: 10px 0 20px;">

            <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Data Pemesan
            </p>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    Nama Lengkap
                </p>
                <div class="ms-auto" style="font-size:14px">
                    {{ $user->name }}
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
                    {{ $user->email }}
                </div>
                <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                    {{-- Icon atau tombol lainnya --}}
                </div>
            </div>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    Pesan untuk Tgl
                </p>
                <div class="ms-auto" style="font-size:14px">
                    {{ $tanggalSewa }}
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
                    {{ $jamSewa }}
                </div>
                <div class="mb-3 me-3" data-bs-toggle="modal" data-bs-target="#pemesanan">
                    {{-- Icon atau tombol lainnya --}}
                </div>
            </div>

        </div>
    </div>
    <div class="container ">

        <div class="mt-3 bg-white rounded" style="padding: 10px 0 20px;">

            <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Detail
                Sewa</p>
            <div class="mt-3 container">
                <div class="">
                    <div class="d-flex">
                        <img src="{{ asset('image/futsal.jpeg') }}" style="height: 80px; width:80px"
                            class="img-fluid rounded me-3" alt="Produk">
                        <div>
                            <h6 class="mb-1">{{ $lapangan->name }}</h6>
                            <small class="text-muted">Jam Sewa:  {{ $jamSewa }}</small>
                            <p class="fw-bold mt-1" style="color: #101010c2">Rp. {{ $lapangan->harga }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-3 mb-4 bg-white rounded" style="padding: 10px 0 20px;">

            {{-- <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Motade
                Pembayaran</p>
            <div class="mt-0 container">
                <div class="mt-2">
                    <!-- Pilih Opsi Pembayaran -->
                    <select id="bankSelector" class="form-select"  required>
                        <option value="BRI" data-image="{{ asset('image/bri.png') }}">Bank BRI</option>
                        <option value="BCA" data-image="{{ asset('image/bca.png') }}">Bank BCA</option>
                        <option value="BNI" data-image="{{ asset('image/bniupdate.jpg') }}">Bank BNI</option>
                    </select>
                </div>

            </div> --}}
            <div class="container mt-3">

                <div class="card-body d-flex align-items-center justify-content-between">
                    <!-- Teks dengan modal -->
                    <h6 class="fw-bold mb-0" style="margin-bottom: 4px;">
                        Kasih Catatan
                    </h6>

                    <!-- Ikon dengan fungsi klik -->
                    <div data-bs-toggle="modal" data-bs-target="#noteModal">
                        <p class="mb-0" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-chevron-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Catatan -->
            <p id="note-display" class="mb-2 ms-3 mt-0 text-secondary" style="margin-top: 4px; margin-bottom: 0;">
                Belum ada catatan.
            </p>
            <div class="container mt-3">
                <h6 class="fw-semibold">
                    Rincian Pembayaran
                </h6>
                <div class="d-flex align-items-center container">
                    <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                        Biaya Lapangan
                    </p>
                    <div class="ms-auto" style="font-size:14px">
                      Rp. {{ $lapangan->harga }}
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
                    <p class="fw-bold mb-0 " style="flex: 1; font: size 16px; padding-bottom: 5px; color:#A9DA05">
                        Total Pembayaran
                    </p>
                    <div class="ms-auto fw-bold" style="font-size:16px;color:#A9DA05">
                       {{ $lapangan->harga }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1">
       <!-- Modal -->

        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="modal-header">Catatan buat pesanan ini</div>
                <div class="modal-body">
                    <textarea id="order-note" placeholder="Pastikan tidak ada data pribadi, ya."></textarea>
                </div>
                <div class="modal-footer">
                    <button class="close-btn" onclick="closeModal()">Batal</button>
                    <button class="save-btn" onclick="saveNote()">Simpan</button>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    </div>
    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="font-family: ubuntu">
            <div class="modal-content">
                <!-- Header Modal -->
                <div class="modal-header modal-header-custom" style="background-color: #A9DA05">
                    <h5 class="modal-title" id="promoModalLabel">Spesial buat kamu!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Body Modal -->
                <div class="modal-body">
                    <!-- Promo Aktif -->
                    <div class="promo-card mb-3 ms-auto">
                        <span class="promo-card-icon">
                            <label class="toggle-switch ms-auto">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </span>
                        <h6 class="mb-1 fw-bold text-success">Pembookingan Pertama</h6>
                        <p class="mb-0 text-muted">Promo khusus pengguna baru</p>
                        <p class="mb-0 text-muted">Berakhir dalam <strong>6 hari</strong></p>
                    </div>
                    <div class="promo-card mb-3 ms-auto">
                        <span class="promo-card-icon">
                            <label class="toggle-switch ms-auto">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </span>
                        <h6 class="mb-1 fw-bold text-success">Pembookingan Pertama</h6>
                        <p class="mb-0 text-muted">Promo khusus pengguna baru</p>
                        <p class="mb-0 text-muted">Berakhir dalam <strong>2 hari</strong></p>
                    </div>

                    <!-- Promo Tidak Aktif -->
                    <div class="promo-card mb-3" style="background-color: #f9f9f9;">
                        <span class="promo-card-icon text-danger">❌</span>
                        <h6 class="mb-1 fw-bold text-secondary">Pembokingan ke-5</h6>
                        <p class="mb-0 text-muted">Rp11.500 <span class="fw-normal">Khusus Reguler</span></p>
                        <p class="mb-0 text-warning">Belum bisa dipakai dengan promo yang dipilih.</p>
                    </div>


                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-back rounded-pill"
                        data-bs-dismiss="modal">Balik</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Promo -->
    {{-- <div class=" promo-banner  mb-2 text-center d-flex ">
        <div class="container d-flex">

            <i class="bi bi-tag-fill me-1"></i> Yuk, pakai kupon promo! <strong>Bisa hemat hingga Rp30.000</strong>
            <div class="ms-auto me-2 mt-2" data-bs-toggle="modal" data-bs-target="#promoModal">
                <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 6l6 6l-6 6" />
                </svg>
            </div>
        </div> --}}
        {{-- <div class="ms-auto">

            <label class="toggle-switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div> --}}
    {{-- </div> --}}


    <div class="container">
        <!-- Button to open the modal -->

        <!-- Modal Structure -->
        <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="noteModalLabel">Catatan buat pesanan ini</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <textarea class="form-control" id="orderNote" placeholder="Pastikan tidak ada data pribadi, ya." rows="4"
                                    maxlength="200"></textarea>
                                <div class="d-flex justify-content-between mt-1">
                                    <small class="text-muted">0/200</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Transaksi -->

        <!-- Tombol Checkout -->
    </div>

    

    </div>

    {{-- moodals pemesanan data diri --}}
    <div class="modal fade" id="pemesanan" tabindex="-1" aria-labelledby="pemesanan" aria-hidden="true"
        style="font-family: ubuntu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #a8da05">
                    <h5 class="modal-title" id="pemesananLabel">Informasi Pemesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    <form>
                        <!-- Checklist Name -->
                        <div class="mb-3 container">
                            <label for="checklistName" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="checklistName" placeholder="Ridho Ilham">
                        </div>
                        <div class="mb-3 container">
                            <label for="checklistName" class="form-label">No Telpon</label>
                            <input type="text" class="form-control" id="checklistName" placeholder="0897091565">
                        </div>
                        <div class="mb-3 container">
                            <label for="checklistName" class="form-label">Email Pengguna</label>
                            <input type="text" class="form-control" rows="3" id="checklistName"
                                placeholder="Ridhoxyz@gmail.com">
                        </div>


                        <!-- Description -->
                        <div class="mb-3 container">
                            <label for="description" class="form-label">Alamat Pengguna
                            </label>
                            <textarea class="form-control" id="description" rows="3"
                                placeholder="Jalan Patimura uang 1000perak Kanan jalan"></textarea>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modals detail-pembayaran --}}
    <livewire:transaksi-pembayaran :lapangan="$lapangan" :user="$user" :jam-sewa="$jamSewa" :tanggal-sewa="$tanggalSewa" />

@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
