@extends('user.layout')

@section('styles')
    <style>
        .nav-item {
            flex: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #05030d
        }



        .nav-link {
            font-weight: bold;

            color: #000000c3;
            padding: 5px 8px;
            /* Menyesuaikan padding agar lebih rapat */
        }

        .nav-item .nav-link.active {
            color: #A9DA05;

            /* Warna aktif */
            border-bottom: 2px solid #A9DA05;
            /* Garis bawah aktif */
            background-color: #453e2900;
            border-top: #43434300;
            border-left: #43434300;
            border-right: #43434300;
        }

        .nav-tabs {
            border-bottom: none;
            /* Menghapus border bawah default */
        }

        .custom-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 16px;
            background-color: #fff;
        }

        .custom-card img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
        }

        .custom-card .title {
            font-weight: 600;
            font-size: 16px;
        }

        .custom-card .icon-text {
            font-size: 14px;
            color: #6c757d;
        }

        .rebook-btn {
            background-color: #000;
            /* Warna hitam untuk latar belakang */
            color: #000;
            /* Warna hitam untuk teks */
            border-radius: 8px;
            font-weight: 500;
        }

        .rebook-btn:hover {
            background-color: #05030d;
            /* Warna hover tetap */
            color: #000;
            /* Teks tetap hitam saat hover */
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="bg-white">

            <div class="d-flex justify-content-center fixed py-4 align-items-center position-relative bg-white">
                <!-- Icon Kembali -->
                <a href="/user" class="position-absolute start-0 p-3  "
                    style="font-size: 24px; border-radius: 50%; background-color: transparent;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>

                <!-- Judul Teks -->
                <h5 class="fw-semibold text-center">Riwayat</h5>
            </div>


            <!-- Filter Header for History Page -->
            <ul class="nav nav-tabs justify-content-center" id="filterTabs" role="tablist">
                <!-- Tab untuk status "Pending" -->
                <!-- Tab untuk status "Menunggu Hari" -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="waiting-tab" data-bs-toggle="tab" href="#waiting" role="tab"
                        aria-controls="waiting" aria-selected="false">Menunggu Hari</a>
                </li>
                <!-- Tab untuk status "Selesai" -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="completed-tab" data-bs-toggle="tab" href="#completed" role="tab"
                        aria-controls="completed" aria-selected="false">Selesai</a>
                </li>

                <!-- Tab untuk status "Ditolak" -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="rejected-tab" data-bs-toggle="tab" href="#rejected" role="tab"
                        aria-controls="rejected" aria-selected="false">Batal</a>
                </li>
            </ul>
        </div>
        <div class="container mt-3 bg-white" style="padding-top:5px">

            <div class="tab-content   mt-3" id="filterTabsContent">
                <!-- Content untuk tab "Pending" -->
                <div class="tab-pane fade show active" id="waiting" role="tabpanel" aria-labelledby="pending-tab">
                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <button class="btn btn-success rounded-pill"
                                    style="font-size:12px; padding:2px 8px; margin:8px; color:white">
                                    <span class="icon" style="color:white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 9v4" />
                                            <path
                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </span>
                                    Menunggu Tanggal
                                </button>

                                <div class="d-flex align-items-center">


                                    <img src="https://via.placeholder.com/70" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title" style="color: #0000009d">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Booking lagi</button>
                            </div>
                        </div>
                    </a>
                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <button class="btn btn-success rounded-pill"
                                    style="font-size:12px; padding:2px 8px; margin:8px; color:white">
                                    <span class="icon" style="color:white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-progress-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                                            <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                                            <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                                            <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                                            <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                                            <path d="M9 12l2 2l4 -4" />
                                          </svg>
                                    </span>
                                    Selesai
                                </button>
                                <div class="d-flex align-items-center">

                                    <img src="https://via.placeholder.com/70" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Re-Book</button>
                            </div>
                        </div>
                    </a>
                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <div class="d-flex align-items-center">

                                    <img src="https://via.placeholder.com/70" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Re-Book</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Content untuk tab "Menunggu Hari" -->
            <div class="tab-content   mt-3" id="filterTabsContent">

                <!-- Content untuk tab "Selesai" -->
                <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">


                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <button class="btn btn-success btn-sm rounded-pill opacity-75 ms-auto"
                                    style="font-size:12px; padding:2px 8px; margin:8px;">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 12l2 2l4 -4" />
                                        </svg>
                                    </span>
                                    Selesai
                                </button>
                                <div class="d-flex align-items-center">

                                    <img src="{{ asset('image/futsal.jpeg') }}" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title" style="color: rgba(0, 0, 0, 0.695)">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Re-Book</button>
                            </div>
                        </div>
                    </a>
                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <button class="btn btn-success btn-sm rounded-pill opacity-75 ms-auto"
                                    style="font-size:12px; padding:2px 8px; margin:8px;">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 12l2 2l4 -4" />
                                        </svg>
                                    </span>
                                    Selesai
                                </button>
                                <div class="d-flex align-items-center">

                                    <img src="{{ asset('image/futsal.jpeg') }}" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title" style="color: rgba(0, 0, 0, 0.695)">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Re-Book</button>
                            </div>
                        </div>
                    </a>
                    <a href="/customer.detail/history">
                        <div class="container mt-2">
                            <!-- Custom Card -->
                            <div class="custom-card ">
                                <button class="btn btn-success btn-sm rounded-pill opacity-75 ms-auto"
                                    style="font-size:12px; padding:2px 8px; margin:8px;">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 12l2 2l4 -4" />
                                        </svg>
                                    </span>
                                    Selesai
                                </button>
                                <div class="d-flex align-items-center">

                                    <img src="{{ asset('image/futsal.jpeg') }}" alt="Restaurant" class="me-3">
                                    <div class="flex-grow-1">
                                        <div class="title" style="color: rgba(0, 0, 0, 0.695)">GastronomicGrove</div>
                                        <div class="d-flex align-items-center icon-text">
                                            <i class="bi bi-clock me-1"></i> 45 min &bull; <i
                                                class="bi bi-geo me-1 ms-2"></i> Italian
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-geo-alt-fill me-1"></i> 2715 Ash Dr. San Jose, S...
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                    style="font: 12px">Re-Book</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- Content untuk tab "Ditolak" -->
            <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                <p class="text-danger m-3 p-3 abu rounded">Belum ada layanan yang ditolak</p>
            </div>
        </div>

    </div>
@endsection
@php
    $hideNavbar = true;
@endphp
