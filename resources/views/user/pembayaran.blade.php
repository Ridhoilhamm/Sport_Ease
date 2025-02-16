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

        <div class="mb-1 fixed-top container bg-white" style="padding-top: 10px">
            <div class="d-flex align-items-center" style="padding-bottom: 10px;">
                <a href="{{ route('detaillapangan', ['id' => $lapangan->id]) }}" class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left" style="color: black">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>
                <h5 class="fw-semibold mb-0" style="color:#000000c3">Informasi Pemesanan</h5>
            </div>  
        </div>

    <div class="mt-5 container bg-white rounded" style="padding: 10px 0 20px;">
        <div class="" style="  ">
            <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Data Pemesan
            </p>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    Nama Lengkap
                </p>
                <div class="ms-auto" style="font-size:14px">
                    {{ $user->name }}
                </div>
                <div class="mb-3 " data-bs-toggle="modal" data-bs-target="#pemesanan">
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
                <div class="mb-3 " data-bs-toggle="modal" data-bs-target="#pemesanan">
                    {{-- Icon atau tombol lainnya --}}
                </div>
            </div>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    No. Hendphone
                </p>
                <div class="ms-auto" style="font-size:14px">
                    {{$user->phone}}
                </div>
                <div class="mb-3 " data-bs-toggle="modal" data-bs-target="#pemesanan">
                    {{-- Icon atau tombol lainnya --}}
                </div>
            </div>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    Tgl. Pemesanan
                </p>
                @php
                    \Carbon\Carbon::setLocale('id');
                @endphp
                <div class="ms-auto" style="font-size:14px">
                    {{ \Carbon\Carbon::parse($tanggalSewa)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                </div>
                <div class="mb-3 " data-bs-toggle="modal" data-bs-target="#pemesanan">
                    {{-- Icon atau tombol lainnya --}}
                </div>
            </div>
            <div class="d-flex align-items-center container">
                <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                    Jam Dipilih
                </p>
                <div class="ms-auto" style="font-size:14px">
                    {{-- <p>{{ implode(', ', $get_time) }}</p> --}}
                    {{ $jamSewa }}
    
                </div>
                
            </div>
        </div>

       

    </div>
    <div class="mt-2 bg-white rounded" style="padding: 10px 0 20px;">

        <div>
            <p class="fw-normal text-secondary container mb-0 mt-0 border-bottom" style="padding-bottom: 10px">Detail
                Sewa</p>
            <div class="mt-3 container">
                <div class="">
                    <div class="d-flex">
                        <img src="{{ asset('storage/' . $lapangan->foto) }}"  style="height: 80px; width:80px"
                            class="img-fluid rounded me-3" alt="Produk">
                        <div>
                            <h6 class="mb-1">{{ $lapangan->name }}</h6>
                            <small class="text-muted">Jam Sewa:  {{ $jamSewa }}</small> <br/>
                            <p class="fw-bold mt-1" style="color: #101010c2">Rp. {{ number_format($lapangan->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-white">
        <div class="container mt-2"  style="padding-top:10px">

            <div class="card-body d-flex align-items-center justify-content-between">
                <!-- Teks dengan modal -->
                <h6 class="fw-bold mb-0" style="margin-bottom: 4px;">
                    Kasih Catatan
                </h6>

                <!-- Ikon dengan fungsi klik -->
                <div data-bs-toggle="modal" data-bs-target="#noteModal">
                    <p class="mt-3 mb-0" style="cursor: pointer;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icon-tabler-chevron-right" class="mt-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
        <!-- Catatan -->
        <p id="note-display" class="container mb-2 mt-0 text-secondary" style="margin-top: 4px; padding-bottom:10px;">
            Belum ada catatan.
        </p>
    </div>
    <div class="mt-2 mb-2 bg-white rounded" style="padding: 10px 0 20px;">

        <div class="ms-3">
          
            <div class=" mt-3">
                <h6 class="fw-semibold">
                    Rincian Pembayaran
                </h6>
                <div class="d-flex align-items-center ">
                    <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                        Biaya Lapangan
                    </p>
                    <div class="ms-auto me-3" style="font-size:14px">
                        <p>Rp. {{ number_format($lapangan->harga, 0, ',', '.') }}</p>
    
                    </div>
                </div>
                <div class="d-flex align-items-center ">
                    <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                        Biaya Aplikasi
                    </p>
                    <div class="ms-auto me-3" style="font-size:14px">
                        Rp.1.000
                    </div>
                </div>
                <div class="d-flex align-items-center ">
                    <p class="fw-medium mb-0 " style="flex: 1; font-size:14px; padding-bottom: 5px;">
                        Biaya Admin
                    </p>
                    <div class="ms-auto me-3" style="font-size:14px">
                        Rp.1.000
                    </div>
    
                </div>
                <div class="d-flex align-items-center ">
                    <p class="fw-bold mb-0  " style="flex: 1; font: size 16px; padding-bottom: 5px; color:#A9DA05">
                        Total Pembayaran
                    </p>
                    <div class="ms-auto me-3 fw-bold" style="font-size:16px;color:#A9DA05">
                        <span style="color: #A9DA05; font-size: 18px" class="fw-semibold ">
                            @if ($lapangan->harga)  <!-- Pastikan harga ada -->
                                Rp. {{ number_format($lapangan->harga * 2+2000, 0, ',', '.') }} <!-- Hitung dengan perkalian 2 jam -->
                            @else
                                Harga atau lama sewa tidak tersedia. <!-- Jika harga tidak ada -->
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
    


    <div class="container">
        <!-- Button to open the modal -->

        <!-- Modal Structure -->
        <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="noteModalLabel">Catatan buat pesanan ini</h5>
        
                    </div>
                    <div class="modal-body">
                        <livewire:add-catatan />
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    </div>

    {{-- moodals pemesanan data diri --}}
    <div class="modal fade" id="pemesanan" tabindex="-1" aria-labelledby="pemesanan" aria-hidden="true"
        style="font-family: ubuntu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #a8da05; padding-bottom:5px;">
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
    @if (session()->has('message'))
    <div class="alert alert-success mt-3" id="flash-message">
        {{ session('message') }}
    </div>

    <script>
        // Menunggu 3 detik lalu menghilangkan pesan
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 3000); // Menghilangkan alert setelah 3 detik
    </script>
@endif


    {{-- modals detail-pembayaran --}}
    <livewire:transaksi-pembayaran 
    :lapangan="$lapangan" 
    :user="$user" 
    :jam-sewa="$jamSewa" 
    :tanggal-sewa="$tanggalSewa" 
    
/>



@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp