@extends('user.layout')

@section('styles')
    <style>
        .splide {
            padding-top: 0px;
            border-radius: 0px;
            overflow: hidden;
            position: relative;
        }


        .splide__track {
            position: relative;
            z-index: 1;
            /* Pastikan slide tetap di bawah ikon */
        }

        button {
            z-index: 10;
            /* Ikon tetap di atas slide */
        }


        .splide__slide {
            border-radius: 0px;
            overflow: hidden;
        }

        .splide__image {
            border-radius: 0px;
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .splide__image1 {
            border-radius: 0px;
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }

        .splide__pagination {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
            margin: 0;
            padding: 0;
        }

        .splide__pagination li {
            display: inline-block;
            line-height: 3;
            list-style-type: none;
            margin: 0;
            pointer-events: auto
        }

        .splide_pagination_page {
            height: 4px;
            /* Mengatur tinggi garis */
            width: 20px;
            /* Mengatur panjang garis */
            background: rgba(255, 255, 255, 0.504);
            transition: background 0.3s ease, transform 0.3s ease;
            border-radius: 2px;
            /* Memberikan sedikit kelengkungan pada ujung */
        }


        .splide_pagination_page.is-active {
            background: #c7980b8c;
            width: 8px;
            height: 8px;
        }

        .splide__track--draggable {
            border-radius: 0px;
        }



        .Splide @media (max-width: 600px) {
            .splide_pagination_page {
                width: 6px;
                height: 6px;
            }
        }

        .form-control.form-select {
            background-color: #ffffff;
            /* Latar belakang putih */
            color: #000000;
            /* Teks warna hitam */
            border: 1px solid #626060;
            /* Warna border abu-abu */
            border-radius: 10px;
            /* Membuat sudut border melengkung */
            padding: 12px;
            /* Memberi jarak dalam elemen */
        }

        .modal-body {
            max-height: 300px;

            overflow-y: auto;

        }

        .modal-title {
            mar
        }

        .modal-body::-webkit-scrollbar {
            display: none;

        }

        /* Warna tombol ketika dipilih */
        .btn.selected {
            background-color: #28a745;
            color: white;
            border-color: #28a745;
        }
        .kuning1 {
            background-color: #7c6727b9;
        }

        #header {
            background-color: transparent;
            /* Default background */
            z-index: 1000;
            transition: background-color 0.3s ease;
            /* Transisi untuk latar belakang */
        }

        #header.scrolled a {
            background-color: #00000000;
        }

        #header.scrolled {
            background-color: #212529 !important;
            /* Tambahkan !important untuk memastikan aturan CSS diterapkan */
        }
     

    </style>
@endsection

@section('content')
    <div>
        <div id="header">

            <a href="/kategory">
                <button class="btn btn-light position-fixed top-0 start-0 m-3 rounded-circle p-2 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </button>
            </a>

            <!-- Right Button -->
            <button class="btn btn-light position-fixed top-0 end-0 m-3 rounded-circle p-2 shadow like-btn"
                data-state="not-liked">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
            </button>
        </div>
        <div class="bg-white">
            <!-- Slider -->
            <section class="splide position-relative">
                <!-- Left Button -->

                <!-- Splide Slides -->
                <div class="splide__track">

                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('image/kolam-renang.jpg') }}" alt="Slide 01" class="splide__image1 " />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/badminton.jpg') }}" alt="Slide 02" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/lapangan volly.jpeg') }}" alt="Slide 03" class="splide__image1 " />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/download.jpeg') }}" alt="Slide 04" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/lapangan-golf.jpg') }}" alt="Slide 05" class="splide__image1 " />
                        </li>
                    </ul>
                </div>
            </section>




            <!-- Card -->
            <div class=" position-relative" style="margin-top: -20px; z-index: 10; padding-bottom:50px;">
                <div class="card shadow-sm rounded-4 overflow-hidden mx-auto" style="max-width: 400px;">
                    <!-- Image -->

                    <!-- Card Content -->
                    <div class="card-body mb-4">
                        <h5 class="card-title fw-bold text-black-10">GOR Hokky Futsal</h5>
                        <p class="text-muted mb-2 text-secondary" style="font-size: 14px;">Jl. Batubara No.15, Nginden,
                            Surabaya
                        </p>
                        <!-- Rating -->
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="badge bg-warning text-dark" style="font-size: 18px">Rp.120.000/Jam</span>

                        </div>
                        <!-- Features -->
                        <p class="fw-medium mb-0" style="font-size: 18px">Fasilitas</p>

                        <section class="px-1 pt-0 mb-4">
                            <div style="overflow-x:scroll; white-space: nowrap; position: relative;">
                                <div
                                    style="display: inline-flex; min-width: 100%; width: fit-content; padding-bottom:5px; padding-top:10px">
                                    <!-- Slide 1 -->
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-droplet-half">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M7.502 19.423c2.602 2.105 6.395 2.105 8.996 0c2.602 -2.105 3.262 -5.708 1.566 -8.546l-4.89 -7.26c-.42 -.625 -1.287 -.803 -1.936 -.397a1.376 1.376 0 0 0 -.41 .397l-4.893 7.26c-1.695 2.838 -1.035 6.441 1.567 8.546z" />
                                                <path d="M12 3v18" />
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Air Mineral</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-parking">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                <path
                                                    d="M10 16v-8h2.667c.736 0 1.333 .895 1.333 2s-.597 2 -1.333 2h-2.667" />
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Tempat Parkir</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-tools-kitchen-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3" />
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Kantin</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-armchair">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z" />
                                                <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5" />
                                                <path d="M6 19v2" />
                                                <path d="M18 19v2" />
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Kursi Penonton</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-hanger">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                            </svg>
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Kamar Ganti</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 2 -->
                                    <!-- Add More Duplicated Slides if Needed -->
                                </div>
                            </div>
                        </section>
                        <!-- Price and Availability -->
                        <div class="d-flex align-items-center">
                            <p class="mt-1 mb-2" style="font-size:18px;">Deskripsi</p>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3  rounded p-2 ">
                            <!-- Kolom Kiri -->
                            <!-- Kolom Kanan -->
                            <div class="w-100 ps-1 px-2 text-start">
                                <p class="text-secondary" id="description" style="text-align: justify;">
                                    Lapangan Futsal Hokky menawarkan fasilitas bermain futsal dengan kualitas terbaik dan
                                    berstandar
                                    nasional, memastikan kenyamanan dan keamanan para pemain. Permukaan lantai anti-slip dan
                                    pencahayaan
                                    LED yang terang memberikan pengalaman bermain optimal, baik siang maupun malam. Selain
                                    itu,
                                    fasilitas pendukung seperti ruang ganti, area parkir luas, kantin yang menyediakan
                                    minuman segar,
                                    serta tribun penonton yang nyaman menjadikan venue ini pilihan terbaik bagi pemain dan
                                    penonton.
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">
                                        <br />
                                        <strong style="font-size: 16px" class="mt-2">Aturan Venue</strong><br />
                                        Kebersihan dan kenyamanan dijaga dengan ketat melalui aturan bebas rokok di seluruh
                                        area dan
                                        larangan membawa makanan atau minuman ke dalam lapangan. Dengan lokasi strategis dan
                                        lingkungan yang
                                        tertib, Lapangan Hokky cocok untuk latihan rutin maupun pertandingan resmi.<br />
                                        <strong style="font-size: 16px" class="mt-2">Jam Operasional</strong><br />
                                        Lapangan ini beroperasi
                                        setiap hari dengan jam operasional 08.00 - 22.00 WIB, sehingga Anda bisa mengatur
                                        waktu bermain
                                        sesuai kebutuhan.
                                    </span>
                                </p>
                                <button id="readMoreBtn" class="btn btn-link p-0 text-primary"
                                    style="background: none; border: none; text-decoration: none;">Lihat
                                    Selengkapnya</button>
                            </div>
                        </div>


                        <!-- Button -->
                    </div>
                </div>
            </div>
            <div class="fixed-bottom mt-1 mb-0 bg-white shadow-lg rounded-lg">
                <div class="mb-1 mt-0 p-2">
                    <p class="text-muted small mb-2 mt-2">Tersedia: <strong>3 Lapangan</strong></p>
                    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Booking Lapangan
                    </button>
                </div>
            </div>

        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable container">
                <div class="modal-content container">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title text-center" id="bottomModalLabel">Pilih Tanggal Sewa</h5>
                    </div>
                    <div class="modal-body1">
                        <form class="mt-2">
                            <!-- Input Tanggal Sewa -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Sewa</label>
                                <div class="input-group justify-content-center">
                                    <span class="input-group-text bg-light">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <input type="text"  id="tanggalPicker" class="form-control w-50"  placeholder="Pilih Tanggal">
                                </div>
                            </div>
                            

                            <!-- Pilih Jam Sewa -->
                            <div class="mb-3">
                                <div class="mb-3 ">
                                    <label for="durasi" class="form-label">Durasi Sewa</label>
                                    <select class="form-select" id="durasi">
                                        <option value="1">1 Jam</option>
                                        <option value="2">2 Jam</option>
                                        <option value="3">3 Jam</option>
                                        <option value="4">4 Jam</option>
                                        <option value="5">5 Jam</option>
                                    </select>
                                </div>
                                <label for="jam" class="form-label">Jam Sewa</label>
                                <div class="d-flex flex-wrap gap-2" id="timeButtons">
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="08:00">08:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="09:00">09:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="10:00">10:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="11:00">11:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="12:00">12:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="13:00">13:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="14:00">14:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="15:00">15:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="16:00">16:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="17:00">17:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="18:00">18:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="19:00">19:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="20:00">20:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="21:00">21:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="22:00">22:00</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-time="23:00">23:00</button>
                                </div>
                            </div>
                            <!-- Pilih Durasi Sewa -->


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/pembayaran">
                            <button type="button" class="btn btn-success">Lanjutkan</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- modals --}}
@endsection
@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
