@extends('user.layout')

@section('styles')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #6c757d;
        }

        .icon {
            font-size: 20px;
            margin-right: 2px;
        }

        .list-group-item {
            cursor: pointer;
        }

        .stat-card {
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 10px 0;
        }

        .stat-card h5 {
            margin: 0;
            font-size: 14px;
        }

        .stat-card p {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        a {
            color: inherit;
            /* Mengambil warna dari elemen pembungkus */
            text-decoration: none;
            /* Menghilangkan garis bawah */
        }

        .modal-body {
            max-height: 350px;
            /* Tentukan tinggi maksimal */
            overflow-y: auto;
            /* Aktifkan scroll jika konten lebih panjang dari yang ditampilkan */
        }

        .modal-body1 {
            max-height: 500px;
            /* Tentukan tinggi maksimal */
            overflow-y: auto;
            /* Aktifkan scroll jika konten lebih panjang dari yang ditampilkan */
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
            background-color: #00000000;





        }

        .modal-body::-webkit-scrollbar {
            display: none;
            /* Untuk Chrome, Safari, dan Edge */
        }

        .custom-slide-up {
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
            height: 100%;
            /* Modal akan memenuhi bagian bawah layar */
        }

        .modal.show .custom-slide-up {
            transform: translateY(0);
        }

        .modal-dialog {
            margin: 0;
            width: 100%;
            /* Full width */
            position: absolute;
            bottom: 0;
        }

        /* Optional: Responsiveness */
        @media (min-width: 768px) {
            .modal-dialog {
                max-width: 500px;
                /* Batas untuk perangkat besar */
            }
        }

        .custom-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 16px;
            background-color: #fff;
        }

        .custom-card .content {
            flex-grow: 1;
            margin-left: 15px;
        }

        .custom-card .content p {
            margin: 0;
        }

        .custom-card .content p.title {
            font-weight: bold;
            font-size: 16px;
        }

        .custom-card .content p.subtitle {
            font-size: 14px;
            color: #6c757d;
        }

        .custom-card .arrow {
            font-size: 18px;
            color: #6c757d;
        }

        .modal-backdrop.show {
            z-index: 1040;
        }

        #tambahrekening {
            z-index: 1050;
        }

        .position-relative {
    position: relative;
}

.pencil-icon {
    position: absolute;
    bottom: 52px; /* Sesuaikan jarak vertikal dengan gambar */
    left: 50%;    /* Posisikan di tengah */
    transform: translateX(-50%);
    background-color: white; /* Opsional, jika ingin membuat latar belakang untuk ikon */
    border-radius: 50%;      /* Opsional, untuk memberikan efek lingkaran */
    padding: 5px;            /* Opsional, untuk memberi jarak di sekitar ikon */
}

.card-profile{
    border-radius: 0 0 15px 15px; 
    background-color: #fff; 
}
    </style>
@endsection

@section('content')
    <div>

        <body>
            <div class="">
                <a href="/user">
                    <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle p-2 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                </a>
                <div class="card-profile shadow p-4 mx-auto" style="max-width: 400px;">
                    <!-- Profile Picture & Info -->
                    <div class="text-center mb-3 position-relative">
                        <img src="{{ asset('image/Perfil.png') }}" alt="Profile Picture" class="profile-pic mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-minus pencil-icon">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                            <path d="M16 19h6" />
                        </svg>
                        <h4 class="fw-bold mb-0">Ridho Ilham</h4>
                        <p class="text-secondary">Surabaya, Jawa Timur</p>
                    </div>
                    
                    <!-- Stats -->
                    <div class="row text-center mb-4">
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Favorit</h5>
                                <p>3</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Orders</h5>
                                <p>10</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Point</h5>
                                <p>10</p>
                            </div>
                        </div>
                    </div>

                    <!-- Menu List -->
                </div>
            </div>
            <div class="bg-white mt-2" style="padding-bottom: 200px">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3  mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        {{-- type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" --}}
                        <p class="mb-0 text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Informasi
                            Pribadi</p>
                        <div class="me-3 ms-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                            <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-chevron-right" class="">

                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3  mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Pesanan Kamu</p>

                        <div class="me-3 ms-auto">
                            <a href="/riwayat">

                                <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-chevron-right" class="">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 6l6 6l-6 6" />
                                </svg>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Favorite Lapangan</p>
                        <div class="me-3 ms-auto" data-bs-toggle="modal" data-bs-target="#favorite">

                            <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-chevron-right" class="">

                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3  mb-2"
                        data-bs-toggle="modal" data-bs-target="#pembayaran">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                            data-bs-target="#pembayaran">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                <path d="M3 10l18 0" />
                                <path d="M7 15l.01 0" />
                                <path d="M11 15l2 0" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Pembayaran</p>
                        <div class="me-3 ms-auto">

                            <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-chevron-right" class="">

                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div>
                    </li>
                    {{-- <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                        </span> --}}
                    <!-- Teks -->
                    {{-- <p class="mb-0 text-center ms-1">Keamanan</p>
                        <div class="me-3 ms-auto" data-bs-toggle="modal" data-bs-target="#favorite">

                            <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-chevron-right" class="">

                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div> --}}
                    {{-- </li> --}}
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2 "
                        data-bs-toggle="modal" data-bs-target="#logout">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M9 12h12l-3 -3" />
                                <path d="M18 15l3 -3" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Logout</p>
                    </li>
                </ul>

            </div>

            <div>
                {{-- modal --}}
                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered container">
                        <div class="modal-content">
                            <div class="modal-header border-2 bg-success">
                                <h5 class="modal-title" id="staticBackdropLabel" style="color: #f8f9fa">Informasi Pribadi
                                </h5>
                                
                            </div>
                            <div class="modal-body2 container">
                                <form>
                                    <!-- Checklist Name -->
                                    <div class="mb-3 container mt-2">
                                        <label for="checklistName" class="form-label">Nama Pengguna</label>
                                        <input type="text" class="form-control" id="checklistName"
                                            placeholder="Ridho Ilham">
                                    </div>
                                    <div class="mb-3 container">
                                        <label for="checklistName" class="form-label">No Telpon</label>
                                        <input type="text" class="form-control" id="checklistName"
                                            placeholder="0897091565">
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
                                        <textarea class="form-control" id="description" rows="3" placeholder="Jalan Patimura uang 1000perak Kanan jalan"></textarea>
                                    </div>



                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- modals favorite --}}
            <div class="modal fade" id="favorite" tabindex="-1" aria-labelledby="favorite" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable container">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="favoriteLabel" style="color: #f8f9fa">Favorite Lapangan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                
                            </div>
                            <div class="container rounded"
                                style="background-color: #F5F5F5; padding-top:10px; padding-bottom:10px">
                                <div class="custom-card">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('image/lapangan-golf.jpg') }}" style="height:70px; width:70px"
                                            alt="Restaurant" class="me-3">
                                        <div class="flex-grow-1">
                                            <div class="title">Lapangan Golf Jaya</div>
                                            <div class="d-flex align-items-center icon-text">
                                                <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                    class="bi bi-geo me-1 ms-2"></i> Italian
                                            </div>
                                            <div class="icon-text text-secondary">
                                                <i class="bi bi-geo-alt-fill me-1 "></i> Jalan Nginden Semolo
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                        style="font-size: 12px">Booking Lagi</button>
                                </div>
                                <div class="custom-card mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('image/badminton.jpg') }}" style="height: 70px; width:70px;"
                                            alt="Restaurant" class="me-3">
                                        <div class="flex-grow-1">
                                            <div class="title">Lapangan Badminton Indra</div>
                                            <div class="d-flex align-items-center icon-text">
                                                <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                    class="bi bi-geo me-1 ms-2"></i> Italian
                                            </div>
                                            <div class="icon-text text-secondary">
                                                <i class="bi bi-geo-alt-fill me-1"></i> Jalan Nginden Semolo
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                        style="font-size: 12px">Booking Lagi</button>
                                </div>

                                <!-- Jika ada lebih banyak konten, bisa digulir ke bawah -->
                                <div class="custom-card mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('image/kolam-renang.jpg') }}" style="height:70px; width:70px"
                                            alt="Kolam" class="me-3">
                                        <div class="flex-grow-1">
                                            <div class="title">Kolam Renang Berkah Abadi</div>
                                            <div class="d-flex align-items-center icon-text">
                                                <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                    class="bi bi-geo me-1 ms-2"></i>
                                            </div>
                                            <div class="icon-text text-secondary">
                                                <i class="bi bi-geo-alt-fill me-1"></i> Jalan Gedangan
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                        style="font-size: 12px">Booking Lagi</button>
                                </div>

                                <!-- Card lainnya dapat ditambahkan dan akan digulirkan -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- modal Pembayaran --}}
            <div class="modal fade" id="pembayaran" tabindex="-1" aria-labelledby="pembayaran" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered container">
                    <div class="modal-content custom-slide-up">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Motade Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body1">
                            <div class="container text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-credit-card"
                                    style="color: #A9DA05">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M22 10v6a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-6h20zm-14.99 4h-.01a1 1 0 1 0 .01 2a1 1 0 0 0 0 -2zm5.99 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0 -2zm5 -10a4 4 0 0 1 4 4h-20a4 4 0 0 1 4 -4h12z" />
                                </svg>

                            </div>
                            <div class="container text-center">
                                <p class="items-center fw-semibold" style="font-size: 18px">Motade Pembayaran Belum
                                    <br />Tersedia
                                </p>
                                <p class="text-secondary" style="font-size:12px">Silahkan Tambahkan Kartu debit atau E-wallet anda untuk mempermudah proses pembayaran
                                    anda</p>
                            </div>
                            <div class="container mt-4">
                                <!-- Card 1 -->
                                <div class="custom-card">
                                    <div class="icon">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                    <div class="content" data-toggle="modal" data-target="#tambahrekening">
                                        <p class="title">Tambah Kartu Debit / Kredit</p>
                                        <div class="d-flex justify-items-center">

                                            <p class="subtitle" style="font-size: 12px">Saat ini Anda dapat menghubungkan kartu debit / kredit
                                                Mandiri
                                            </p>
                                            <a href="/kartudebit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right mb-2 ms-3">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 6l6 6l-6 6" />
                                        </svg>
                                    </a>

                                        </div>
                                    </div>
                                    <div class="arrow">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="custom-card mt-2 mb-2">
                                    <div class="icon">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div class="content">
                                        <p class="title">Tambah e-Wallet</p>
                                        <div class="d-flex justify-items-center" data-toggle="modal"
                                            data-target="#tambahrekening">

                                            <p class="subtitle" style="font-size: 12px">Anda dapat menghubungkan e-Wallet Anda untuk memudahkan
                                                pembayaran.
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right mb-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 6l6 6l-6 6" />
                                            </svg>
                                        </div>

                                    </div>
                                    <div class="arrow">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- modals logout --}}
            <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered container">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logout">Konfirmasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Apakah anda yakin ingin keluar dari akun ini?</p>

                            <!-- Button "IYA" dan "TIDAK" secara vertikal -->
                            <div class="d-grid gap-2 mt-3">
                                <button type="button" style="background-color: #A9DA05; color:#F5F5F5" class="btn">IYA</button>
                                <button type="button" class="btn btn-outline-primary"
                                    data-bs-dismiss="modal">TIDAK</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- modals daftar rekening --}}
            <div class="modal fade" id="tambahrekening" tabindex="-1" role="dialog" aria-labelledby="tambahrekening"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @php
            $hideNavbar = true;

        @endphp
