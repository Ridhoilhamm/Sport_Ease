@extends('user.layout')

@section('content')
    <!-- Promo Section -->
    <div>

        <div class="bg-white">
            <!-- Slider -->
            <section class="splide position-relative">
                <!-- Left Button -->
                <a href="/kategory">
                    <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle p-2 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                </a>

                <!-- Right Button -->
                <button class="btn btn-light position-absolute top-0 end-0 m-3 rounded-circle p-2 shadow like-btn"
                    data-state="not-liked">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                </button>



                <!-- Splide Slides -->
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('image/kolam-renang.jpg') }}" alt="Slide 01" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/badminton.jpg') }}" alt="Slide 02" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/lapangan volly.jpeg') }}" alt="Slide 03" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/download.jpeg') }}" alt="Slide 04" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/lapangan-golf.jpg') }}" alt="Slide 05" class="splide__image1" />
                        </li>
                    </ul>
                </div>
            </section>




            <!-- Card -->
            <div class=" position-relative" style="margin-top: -20px; z-index: 10;">
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
                                style="font-size: 14px"></span>
                        </div>
                        <!-- Features -->
                        <p class="fw-medium" style="font-size: 16px">Fasilitas</p>

                        <section class="px-1 pt-0 mb-3">
                            <div style="overflow-x:scroll; white-space: nowrap; position: relative;">
                                <div style="display: inline-flex; min-width: 100%; width: fit-content;">
                                    <!-- Slide 1 -->
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                id="Hanger--Streamline-Sharp" height="30" width="18">
                                                <desc>Hanger Streamline Icon: https://streamlinehq.com</desc>
                                                <g id="hanger--hanger-locker-check-coat-room-cloak-hotel">
                                                    <path id="Union" fill="#000000" fill-rule="evenodd"
                                                        d="M10 5.5c0 -1.10457 0.8954 -2 2 -2s2 0.89543 2 2V6h3v-0.5c0 -2.76142 -2.2386 -5 -5 -5 -2.76142 0 -5 2.23858 -5 5v2.37048l0.75579 0.43188L10.5 9.87048v0.84852l-9.36019 6.5522L0.5 17.719V23.5h23v-5.781l-0.6398 -0.4478L13.5 10.719V8.12952l-0.7558 -0.43188L10 6.12952V5.5Zm-6.5 15v-1.219l8.5 -5.95 8.5 5.95V20.5h-17Z"
                                                        clip-rule="evenodd" stroke-width="1"
                                                        style="height: 100px; width: 100%; border: none; box-shadow: none; object-fit: cover;"
                                                        class="mt-2"></path>
                                                </g>
                                            </svg>
                                            <div class="mt-2 text-center">
                                                <p class="mb-0" style="font-size: 12px; color: #333;">Kamar Ganti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-shrink: 0; width: 100px; margin-right: 10px; position: relative; background-color: #f0f0f0; border-radius: 8px; padding: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                                        class="text-center">
                                        <div class="text-center mt-1 mr-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                id="Hanger--Streamline-Sharp" height="30" width="18">
                                                <desc>Hanger Streamline Icon: https://streamlinehq.com</desc>
                                                <g id="hanger--hanger-locker-check-coat-room-cloak-hotel">
                                                    <path id="Union" fill="#000000" fill-rule="evenodd"
                                                        d="M10 5.5c0 -1.10457 0.8954 -2 2 -2s2 0.89543 2 2V6h3v-0.5c0 -2.76142 -2.2386 -5 -5 -5 -2.76142 0 -5 2.23858 -5 5v2.37048l0.75579 0.43188L10.5 9.87048v0.84852l-9.36019 6.5522L0.5 17.719V23.5h23v-5.781l-0.6398 -0.4478L13.5 10.719V8.12952l-0.7558 -0.43188L10 6.12952V5.5Zm-6.5 15v-1.219l8.5 -5.95 8.5 5.95V20.5h-17Z"
                                                        clip-rule="evenodd" stroke-width="1"
                                                        style="height: 100px; width: 100%; border: none; box-shadow: none; object-fit: cover;"
                                                        class="mt-2"></path>
                                                </g>
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
                        <div
                            class="d-flex justify-content-between align-items-center mb-3 border border-secondary rounded p-2 mt-1">
                            <!-- Kolom Kiri -->
                            <!-- Kolom Kanan -->
                            <div class="w-100 ps-1 text-start">
                                <p style="font-size: 15px;" class="text-dark">Jarak</p>
                                <p class="mt-0 mb-0 text-secondary" style="font-size: 14px">2.5KM dari Lokasi Anda</p>
                            </div>
                        </div>


                        <!-- Button -->
                    </div>
                </div>
            </div>
            <div class="mt-1 mb-1 bg-white shadow-lg rounded-lg fixed-bottom">
                <div class="me-3 ms-3 mb-1 mt-2 ">
                    <p class="text-muted small mb-2 mt-2">Tersedia: <strong>3 Lapangan</strong></p>
                    <button class="btn btn-success w-100 mb-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Booking
                        Lapangan</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This is a simple modal example using Bootstrap.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
