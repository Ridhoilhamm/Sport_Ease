@extends('user.layout')

@section('content')
@section('styles')
    <style>
        @media (max-width: 768px) {
            .carousel-container {
                overflow-x: hidden;
                /* Menghilangkan scrollbar */
            }
        }

        /* CSS untuk menghilangkan scrollbar di browser berbasis Webkit */
        .carousel-container::-webkit-scrollbar {
            display: none;
            /* Ini untuk menghilangkan scrollbar */
        }

        .carousel-container {
            overflow-x: auto;
            white-space: nowrap;
            position: relative;
        }

        .btn {
            z-index: 10;
            /* Pastikan button berada di atas elemen lainnya */
        }

        .image-container {
            display: flex;
            /* Gunakan Flexbox untuk pengaturan posisi elemen */
            flex-direction: column;
            /* Teks akan berada di bawah gambar */
            align-items: center;
            /* Teks dan gambar berada di tengah */
            max-width: 500px;
            /* Batasi lebar maksimum gambar */
            margin: 0 auto;
            /* Pusatkan kontainer */
        }

        .splide__image1 {
            width: 100%;
            height: auto;
        }

        .content-overlay {
            width: 100%;
            background: white;
            padding: 10px 15px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            border-radius: 8px;
            margin-top: -10px;
        }

        .icon-custom {
            margin-left: 7px;
            color: #453de7
        }

        .manfaat-text {
            font-size: 16px;
            /* Ukuran font */
            line-height: 1.6;
            /* Jarak antar baris */
            text-align: justify;
            /* Rata kiri dan kanan */
            margin: 20px 0;
            /* Jarak atas dan bawah */
            padding: 10px;
            /* Jarak dalam elemen */
            background-color: #f9f9f900;
            /* Warna latar belakang untuk mempertegas area */
            border-radius: 8px;
            /* Aktifkan scroll jika konten lebih panjang dari yang ditampilkan */
            padding-right: 15px;
            /* Membuat sudut melengkung */
        }

        .manfaat-text::-webkit-scrollbar {
            display: none;
            /* Untuk Chrome, Safari, dan Edge */
        }

        .img {
            height: 150px;
            width: 100%;
            object-fit: contain;
            background-color: #f0f0f0;
        }

        #header {
            background-color: transparent;
            /* Default background */
            z-index: 1000;
            transition: background-color 0.3s ease;
            /* Transisi untuk latar belakang */
            border: none;
        }

        #header.scrolled a {
            background-color: #c2bcbcf2;
        }

        #header.scrolled {
            background-color: #fdfdfd !important;
            /* Tambahkan !important untuk memastikan aturan CSS diterapkan */
        }

        #row,
        #like {
            background-color: #f8f9fa;
            color: #495057;
            border: none;
        }

        #header {
            background-color: transparent;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        #header.scrolled {
            background-color: #cad3db;
        }

        #header a,
        #header button {
            transition: background-color 0.3s ease;
        }
        #header.scrolled a,
        #header.scrolled button {
            background-color: rgba(255, 255, 255, 0.953);
        }
    </style>
@endsection

<div>
    <div>
        <div id="header" class="position-fixed w-100 top-0 start-0 bg-transparent transition-all">
            <div class="d-flex justify-content-between align-items-center p-2">
                <a href="/artikel" class="btn btn-light rounded-circle p-2 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="flex justify-between items-center bg-white p-3 rounded-lg shadow-md>
            <section class="px-0
            pt-0 mt-3">
            <div style="overflow-x:scroll; white-space: nowrap; position: relative;">
                <div style="display: inline-flex; min-width: 100%; width: fit-content;">
                    <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;"
                        class="text-center ">
                        <div class="text-center mt-5 mr-0 ">
                            <div class="border rounded bg-"
                                style="padding-top: 15px; padding-bottom: 15px; background-color: #cf2e0d; color: #fff;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ball-volleyball">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 12a8 8 0 0 0 8 4" />
                                    <path d="M7.5 13.5a12 12 0 0 0 8.5 6.5" />
                                    <path d="M12 12a8 8 0 0 0 -7.464 4.928" />
                                    <path d="M12.951 7.353a12 12 0 0 0 -9.88 4.111" />
                                    <path d="M12 12a8 8 0 0 0 -.536 -8.928" />
                                    <path d="M15.549 15.147a12 12 0 0 0 1.38 -10.611" />
                                </svg>
                            </div>
                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">Volly</p>
                            </div>
                        </div>
                    </div>
                    <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;"
                        class="text-center">
                        <div class="text-center mt-5 mr-0 ">


                            <div class="border rounded relative"
                                style="padding-top: 15px; padding-bottom: 15px;  bg-hover color: #A9DA05; position: relative; color: #A9DA05">
                                <div class="bg-hover absolute inset-0 opacity-0 hover:opacity-100"
                                    style="background-color: #D0D0D0; z-index: 0; transition: opacity 0.3s;"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-bowling relative"
                                    style="z-index: 1;">
                                    <path stroke="none" d="M0 0h30v30H0z" fill="none" />
                                    <path d="M7 11v.01" />
                                    <path d="M11 10v.01" />
                                    <path d="M10 14v.01" />
                                    <path d="M11.059 6.07a8 8 0 1 0 .32 15.81" />
                                    <path d="M15.969 9h4" />
                                    <path
                                        d="M14.969 5c0 1.5 1 2 1 4c0 2.5 -2 4.5 -2 7c0 2.6 1.9 6 1.9 6h4.1s2 -3.4 2 -6c0 -2.5 -2 -4.5 -2 -7c0 -2 1 -2.5 1 -4a3 3 0 1 0 -6 0" />
                                </svg>
                            </div>

                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">Bowling</p>

                            </div>
                        </div>
                    </div>
                    <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;"
                        class="text-center">
                        <div class="text-center mt-5 mr-0">
                            <div class="hello border rounded hover-active"
                                style="padding-top:15px; padding-bottom:15px; color: #A9DA05">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ball-tennis">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M6 5.3a9 9 0 0 1 0 13.4" />
                                    <path d="M18 5.3a9 9 0 0 0 0 13.4" />
                                </svg>
                            </div>
                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">Tennis</p>
                            </div>
                        </div>
                    </div>
                    <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;"
                        class="text-center">
                        <div class="text-center mt-5 mr-0">
                            <div class="hello border rounded hover-active "
                                style="padding-top: 15px; padding-bottom:15px;color: #A9DA05">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ball-football">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 7l4.76 3.45l-1.76 5.55h-6l-1.76 -5.55z" />
                                    <path
                                        d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45" />
                                </svg>
                            </div>
                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">Badminton</p>
                            </div>
                        </div>
                    </div>
                    <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;"
                        class="text-center">
                        <div class="text-center mt-5 mr-0">
                            <div class="hello border rounded hover-active"
                                style="padding-top: 15px; padding-bottom:15px;color: #A9DA05">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ping-pong">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12.718 20.713a7.64 7.64 0 0 1 -7.48 -12.755l.72 -.72a7.643 7.643 0 0 1 9.105 -1.283l2.387 -2.345a2.08 2.08 0 0 1 3.057 2.815l-.116 .126l-2.346 2.387a7.644 7.644 0 0 1 -1.052 8.864" />
                                    <path d="M14 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M9.3 5.3l9.4 9.4" />
                                </svg>
                            </div>
                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">T.Meja</p>
                            </div>
                        </div>
                    </div>
                    <div style="flex-shrink: 0; width: 75px; margin-right: 10px; position: relative;"
                        class="text-center">
                        <div class="text-center mt-5 mr-0 ">
                            <div class="hello border rounded hover-active "
                                style="padding-top: 15px; padding-bottom:15px; color: #A9DA05">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-number-8">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path
                                        d="M12 12h-1a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1" />
                                </svg>
                            </div>
                            <div class="mt-2 text-center">
                                <p class="mb-0" style="font-size: 12px; color: #333;">Biliard</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </section>

            <!-- Controls -->
        </div>
    </div>

    <div>
        <div class="bg-white" style="padding-bottom: 65px;">

            <div class="ms-3 me-3 mt-2">
                <div class="row row-cols-2 g-2 bg-white">
                    {{-- @foreach ([['title' => 'Hokky Lapagan Futsal Hokky Lapagan Futsal', 'price' => 'Rp.120.000/Jam', 'discount' => '5%', 'rating' => '4.9', 'sold' => '56', 'image' => asset('image/futsal.jpeg')], ['title' => 'Lapangan Volly', 'price' => 'Rp. 60.000/Jam', 'discount' => '7%', 'rating' => '4.9', 'sold' => '34', 'image' => asset('image/lapangan volly.jpeg')], ['title' => 'Kolam Renang', 'price' => 'Rp. 80.000/Jam', 'discount' => '', 'rating' => '4.8', 'sold' => '20', 'image' => asset('image/kolam-renang.jpg')], ['title' => 'Lapangan Golf ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-golf.jpg')], ['title' => 'Lapangan Tennis ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tenis.jpg')], ['title' => 'Lapangan Tenis Meja', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tmeja.jpg')]] as $product) --}}
                    @foreach ($lapangan as $no => $product)
                        <a href="{{ route('detaillapangan', $product->id) }}">

                            <div class="col mt-3">
                                <div class="card shadow-sm" style="max-width: 200px;">
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->name }}"
                                            style="height: 130px; object-fit: cover; font-size: 12px;"
                                            class="rounded-top">
                                        @if (!empty($product->harga))
                                            {{-- <span class="badge bg-danger position-absolute top-0 start-0 m-2">Terbaru</span> --}}
                                        @endif
                                    </div>
                                    <div class="card-body mb-2 me-2 ms-2" style="padding: 5px">
                                        <!-- Hilangkan padding-bottom -->
                                        <h6 class="card-title mb-2 mt-1 text-truncate" style="font-size: 14px;">
                                            {{ $product->name }}</h6>
                                        <p class="card-text  mb-1 text-success fw-medium text-center"
                                            style="font-size: 16px;">
                                            {{ $product->harga }}
                                            @if (!empty($product->harga))
                                            @endif
                                        </p>
                                        <button type="button" class="btn btn-primary w-100 mt-1"
                                            style="height: 30px; font-size: 12px; padding: 0; line-height: 1;">
                                            Booking
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
