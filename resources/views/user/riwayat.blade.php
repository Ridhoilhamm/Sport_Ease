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

        .hello {
            background-color: #F5F5F5
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

                <!-- Judul Teks -->
                <h5 class="fw-semibold text-center">Riwayat</h5>
            </div>
            <div class="mt-0 px-4">

                <ul class="nav nav-tabs justify-content-center" id="filterTabs" role="tablist">
                    <!-- Tab untuk status "Pending" -->
                    <!-- Tab untuk status "Menunggu Hari" -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="waiting-tab" data-bs-toggle="tab" href="#waiting" role="tab"
                            aria-controls="waiting" aria-selected="false">
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                Menunggu hari
                            </button>
                        </a>
                    </li>

                    <!-- Tab untuk status "Selesai" -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="completed-tab" data-bs-toggle="tab" href="#completed" role="tab"
                            aria-controls="completed" aria-selected="false">
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                Selesai

                            </button>
                        </a>
                    </li>

                    <!-- Tab untuk status "Ditolak" -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="rejected-tab" data-bs-toggle="tab" href="#rejected" role="tab"
                            aria-controls="rejected" aria-selected="false">
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                batal
                            </button>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Filter Header for History Page -->
        </div>
        <div class="container mt-3 bg-white" style="padding-top:10px">

            <div class="tab-content   mt-3" id="filterTabsContent">
                <!-- Content untuk tab "Pending" -->
                <div class="tab-pane fade show active" id="waiting" role="tabpanel" aria-labelledby="pending-tab">

                    @foreach ($riwayat as $no => $data)
                        <a href="">
                            <div class="container mt-2">
                                <!-- Custom Card -->
                                <div class="custom-card border rounded p-3 shadow-sm">
                                    <div class="d-flex flex-column align-items-end">
                                        <button class="btn btn-success btn-sm rounded-pill opacity-75 mb-2"
                                            style="font-size: 12px; padding: 4px 10px;">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 9v4" />
                                                    <path
                                                        d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                                    <path d="M12 16h.01" />
                                                </svg>
                                            </span>
                                            {{ $data->status }}
                                        </button>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <!-- Konten Kiri -->
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('image/futsal.jpeg') }}" alt="Restaurant" class="me-3"
                                                style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                                            <div>
                                                <div class="title" style="color: rgba(0, 0, 0, 0.695); font-weight: bold;">
                                                    {{ $data->lapangan }}</div>
                                                <div class="d-flex align-items-center icon-text text-muted">
                                                    <i class="bi bi-clock me-1"></i> Booking &bull; <i
                                                        class="bi bi-geo me-1 ms-2"></i> 2Jam
                                                </div>
                                                <div class="icon-text text-muted">
                                                    <i class="bi bi-geo-alt-fill me-1"></i> Jalan Nginden surabaya
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Button Kanan -->
                                    </div>
                                    <button class="btn btn-primary rounded-pill fw-semibold w-100 mt-3"
                                        style="font-size: 12px; padding: 6px 12px;">
                                        Booking Lagi
                                    </button>
                                </div>
                            </div>

                        </a>
                    @endforeach


                </div>
            </div>

            <!-- Content untuk tab "Menunggu Hari" -->

        </div>
    </div>


    <!-- Content untuk tab "Ditolak" -->
    <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
        <p class="text-danger m-3 p-3 abu rounded">Belum ada Pembookingan yang dibatalkan</p>
    </div>
    </div>

    </div>
@endsection
@php
    $hideNavbar = true;
@endphp