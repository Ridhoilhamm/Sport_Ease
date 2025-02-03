@extends('user.layout')

@section('styles')
    <style>
        .hover-active:hover {
            background-color: #cf2e0d;
            color: #e4cdcd;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .hello {
            background-color: #F5F5F5
        }

        /* @media (max-width: 768px) {
                    .carousel-container {
                        overflow-x: auto;
                    } */
        /* } */
    </style>
@endsection

@section('content')
    <div>


        <div class="flex bg-white p-0 rounded-lg shadow-md" style="margin-top: 40px; margin-bottom: 40px;">
            <form action="{{ url('kategory') }}" method="GET"
                class="fixed-top bg-white d-flex justify-content-between align-items-center mb-4 mt-0"
                style="padding-bottom: 20px;">

                @if (request()->has('query'))
                    <a href="{{ url('kategory') }}" class="btn btn-light rounded-circle p-2 shadow ms-2 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </a>
                @endif
                <form action="{{ url('lapangan/cari') }}" method="GET"
                    class="fixed-top bg-white d-flex justify-content-between align-items-center mb-4 mt-0"
                    style="padding-bottom: 20px;">
                    <input type="text" name="query" class="form-control mt-4 ms-2 rounded" placeholder="Cari Lapangan"
                        value="{{ request()->query('query') }}">
                    <button class="btn btn-outline-danger ms-2 mt-4 me-2" type="submit">
                        Cari
                    </button>
                </form>

            </form>
        </div>



        <!-- Categories -->
        <div class=" flex justify-between items-center bg-white p-3 rounded-lg shadow-md mb-3 mt-5" style="margin-top:40px">

            <div class="mt-4" style=" overflow-x:scroll; display: inline-flex; min-width: 100%; width: fit-content;">
                <!-- Slide 1 -->


                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center ">
                    <div class="text-center mt-1 mr-0 ">

                        <a href="/lapangan/cari?query=futsal">
                            <div class="hello border rounded hover-active  d-flex justify-content-center
                                        @if (request()->query('query') == 'futsal') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05">
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
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">futsal</p>
                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center ">
                    <div class="text-center mt-1 mr-0 ">

                        <a href="/lapangan/cari?query=volly">
                            <div class="hello border rounded hover-active  d-flex justify-content-center
                                        @if (request()->query('query') == 'volly') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
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
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">Volly</p>
                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center">
                    <div class="text-center mt-1 mr-0 ">

                        <a href="/lapangan/cari?query=bowling">
                            <div class="hello border rounded hover-active d-flex justify-content-center
                                        @if (request()->query('query') == 'bowling') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05"">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-bowling">
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
                        </a>

                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">Bowling</p>

                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center">
                    <div class="text-center mt-1 mr-0">
                        <a href="/lapangan/cari?query=tennis">
                            <div class="hello border rounded hover-active d-flex justify-content-center
                                        @if (request()->query('query') == 'tennis') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ball-tennis">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M6 5.3a9 9 0 0 1 0 13.4" />
                                    <path d="M18 5.3a9 9 0 0 0 0 13.4" />
                                </svg>
                            </div>
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">Tennis</p>
                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center">
                    <div class="text-center mt-1 mr-0">
                        <a href="/lapangan/cari?query=badminton">
                            <div class="hello border rounded hover-active d-flex justify-content-center
                                        @if (request()->query('query') == 'badminton') bg-danger @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color:#F5F5F5 ">
                                <div class="d-flex justify-content-center align-items-center" style="color: #a8da05ca">
                                    <img src="{{ asset('image/shuttlecock.png') }}" style="width: 30px; height:30px;"
                                        alt="">
                                </div>
                            </div>
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">Badminton</p>
                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 5px; position: relative;" class="text-center">
                    <div class="text-center mt-1 mr-0">
                        <a href="/lapangan/cari?query=tenis meja">
                            <div class="hello border rounded hover-active d-flex justify-content-center
                                        @if (request()->query('query') == 'tenis meja') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05">
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
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">T.Meja</p>
                        </div>
                    </div>
                </div>
                <div style="flex-shrink: 0; width: 75px; margin-right: 10px; position: relative;" class="text-center">
                    <div class="text-center mt-1 mr-0 ">
                        <a href="/lapangan/cari?query=biliard">
                            <div class="hello border rounded hover-active d-flex justify-content-center
                                        @if (request()->query('query') == 'biliard') bg-danger text-white @endif"
                                style="padding-top: 15px; padding-bottom: 15px; color: #A9DA05">
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
                        </a>


                        <div class="mt-2 text-center">
                            <p class="mb-0" style="font-size: 12px; color: #333;">Biliard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Controls -->
    </div>


    <!-- Controls -->
    </div>
    @php
        $hideFooter = request()->has('query');
    @endphp



    <!-- Cards -->
    <div class="bg-white" style="padding-bottom: 65px;">

        <div class="ms-3 me-3 mt-2">
            @if ($notFound)
                <div class="bg-white mt-2" id="chat-animation" style="width: 100%: 200px; padding-bottom:22px">
                    <div class="justify-content-center" style="padding-top: 20px">
                        <p class= " text-center">Belum Ada Lapangan</p>
                    </div>
                    <script>
                        var chatAnimation = lottie.loadAnimation({
                            container: document.getElementById('chat-animation'),
                            renderer: 'svg',
                            loop: true,
                            autoplay: true,
                            path: '{{ asset('image/Animation - 1736749790291.json') }}' // Sesuaikan dengan lokasi file JSON
                        });
                    </script>
                </div>

                @php
                    $hideNavbar = true;
                    $hideFooter = true;
                @endphp
            @else
                <div class="row row-cols-2 g-2 bg-white">
                    @php

                    @endphp


                    @foreach ($lapangan as $no => $product)
                        <a href="{{ route('detaillapangan', $product->id) }}">

                            <div class="col mt-1">
                                <div class="card shadow-sm" style="max-width: 200px;">
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->name }}"
                                            style="width:100%; height: 130px; object-fit: cover; font-size: 12px;"
                                            class="rounded-top">
                                        @if (!empty($product->harga))
                                            {{-- <span class="badge bg-danger position-absolute top-0 start-0 m-2">Terbaru</span> --}}
                                        @endif
                                    </div>
                                    <div class="card-body mb-0 me-2 ms-2" style="padding: 5px">
                                        <!-- Hilangkan padding-bottom -->
                                        <h6 class="card-title mb-2 mt-1 text-truncate" style="font-size: 14px;">
                                            {{ $product->name }}</h6>
                                        <p class="card-text  mb-1 text-success fw-medium text-center"
                                            style="font-size: 16px;">
                                            Rp.{{ number_format($product->harga, 0, ',', '.') }}
                                            @if (!empty($product->harga))
                                            @endif
                                        </p>
                                        <button type="button" class="btn btn-primary w-100 mt-1"
                                            style="height: 30px; font-size: 12px; padding: 0; line-height: 1;">
                                            Pesan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
            @endif{{-- @foreach ([['title' => 'Hokky Lapagan Futsal Hokky Lapagan Futsal', 'price' => 'Rp.120.000/Jam', 'discount' => '5%', 'rating' => '4.9', 'sold' => '56', 'image' => asset('image/futsal.jpeg')], ['title' => 'Lapangan Volly', 'price' => 'Rp. 60.000/Jam', 'discount' => '7%', 'rating' => '4.9', 'sold' => '34', 'image' => asset('image/lapangan volly.jpeg')], ['title' => 'Kolam Renang', 'price' => 'Rp. 80.000/Jam', 'discount' => '', 'rating' => '4.8', 'sold' => '20', 'image' => asset('image/kolam-renang.jpg')], ['title' => 'Lapangan Golf ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-golf.jpg')], ['title' => 'Lapangan Tennis ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tenis.jpg')], ['title' => 'Lapangan Tenis Meja', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tmeja.jpg')]] as $product) --}}
        </div>

        <!-- Tambahkan Card Lainnya -->
    </div>


    <!-- Footer Navigation -->
    </div>
@endsection
@php
    $hideNavbar = true;
@endphp
