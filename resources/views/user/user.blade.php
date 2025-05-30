@extends('user.layout')



@section('content')
    <div>
        <div class="bg-white">


            <!-- Promo Section -->

            {{-- <section class="splide mt-5" style="padding-top: 10px;"> --}}

            <div class="container px-3" style="margin-top:56px; padding-bottom:10px;">
                <section class="splide position-relative">
                    <!-- Left Button -->

                    <!-- Splide Slides -->
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($slider as $gambar)
                                <li class="splide__slide me-1">
                                    <img src="{{ asset('storage/' . $gambar->image1) }}" alt="Slide 01"
                                        class="splide__image" />
                                </li>
                                <li class="splide__slide me-1">
                                    <img src="{{ asset('storage/' . $gambar->image2) }}" alt="Slide 01"
                                        class="splide__image" />
                                </li>
                                <li class="splide__slide me-1">
                                    <img src="{{ asset('storage/' . $gambar->image3) }}" alt="Slide 01"
                                        class="splide__image" />
                                </li>
                                <li class="splide__slide me-1">
                                    <img src="{{ asset('storage/' . $gambar->image4) }}" alt="Slide 01"
                                        class="splide__image" />
                                </li>
                                <li class="splide__slide me-1">
                                    <img src="{{ asset('storage/' . $gambar->image5) }}" alt="Slide 01"
                                        class="splide__image" />
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </section>


            </div>
        </div>
        {{-- halaman kastegori atau card --}}
        <div class="container px-3">
            <div class="d-flex align-items-center">
                <p class="mt-3 mb-2" style="font-size:20px;">Kategori</p>
                <a href="/kategory" class="ms-auto mt-1 mb-0 text-success">Lihat Semua</a>
            </div>
            <form action="{{ url('jenis') }}">
                <div class="row row-cols-4 g-2 text-center items-center blackdop-blur-sm ">
                    <a href="/lapangan/cari?query=futsal">

                        <div class="col">
                            <div class="card rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center " style="color: #A9DA05;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
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
                            </div>
                            <p class="mt-1" style="font-size:12px;">Futsal</p>
                        </div>
                    </a>
                    <div class="col">
                        <a href="/lapangan/cari?query=basket">
                            <div class="card rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-ball-basketball">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M5.65 5.65l12.7 12.7" />
                                        <path d="M5.65 18.35l12.7 -12.7" />
                                        <path d="M12 3a9 9 0 0 0 9 9" />
                                        <path d="M3 12a9 9 0 0 1 9 9" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-1" style="font-size:12px;">Basket</p>
                        </a>
                    </div>
                    <a href="lapangan/cari?query=volly">

                        <div class="col">
                            <div class="card rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
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
                            </div>
                            <p class="mt-1" style="font-size:12px;">Volly</p>
                        </div>
                    </a>
                    <div class="col backdrop-blur-2xl">
                        <a href="/lapangan/cari?query=bowling">
                            <div class="card rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
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
                            </div>
                            <p class="mt-1" style="font-size:12px;">Bowling</p>
                        </a>
                    </div>
                    <div class="col m-0">
                        <a href="/lapangan/cari?query=tenis">
                            <div class="card rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-ball-tennis">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M6 5.3a9 9 0 0 1 0 13.4" />
                                        <path d="M18 5.3a9 9 0 0 0 0 13.4" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-1" style="font-size:12px;">Tenis</p>
                        </a>
                    </div>
                    <div class="col m-0">
                        <a href="/lapangan/cari?query=badminton">
                            <div class="card rounded border-0  " style="padding: 28px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05">
                                    <img src="{{ asset('image/shuttlecock.png') }}" style="width: 30px; height:30px;"
                                        alt="">
                                </div>
                            </div>
                            <p class="mt-1" style="font-size:12px;">Badminton</p>
                        </a>

                    </div>
                    <div class="col m-0">
                        <a href="/lapangan/cari?query=tenismeja">
                            <div class="card  rounded border-0  " style="padding: 22px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
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
                            </div>
                            <p class="mt-1" style="font-size:12px;">Tenis Meja</p>
                        </a>
                    </div>

                    <div class="col m-0">
                        <a href="/lapangan/cari?query=biliard">
                            <div class="card  rounded border-0  " style="padding: 19px">
                                <div class="d-flex justify-content-center align-items-center" style="color: #A9DA05">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-sport-billard">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-1" style="font-size:12px;">Biliard</p>
                        </a>

                    </div>
                </div>
            </form>

        </div>



        @if ($transaksi->count() > 0)
        <section class="m-0 flex-grow-1 mt-2 bg-white">
            <div class="m-0">
                <div class="d-flex align-items-center">
                    <h5 class="mt-2  ms-3 mb-2" style="font-size: 20px">Pesanan Anda</h5>

                </div>
            </div>

            <section class="px-3" style="padding-bottom: 10px">
                <div style="overflow-x: auto; white-space: nowrap; position: relative;">
                    <div class="transaction-wrapper" style="display: inline-flex; width: auto; gap: 8px;">
                        <!-- Loop untuk setiap transaksi -->
                        @php
                            \Carbon\Carbon::setLocale('id');
                        @endphp
                        @foreach ($transaksi as $data)
                            <a href="{{ route('detail-transaksi', $data->id) }}" class="text-decoration-none">
                                <div class="card mb-1 shadow-sm transaction-card" style="width: 300px; height: 105px;">
                                    <div class="card-body py-2 px-2" style="padding-bottom: 10px">
                                        <div class="d-flex align-items-center justify-content-between pb-2 mb-2"
                                            style="border-bottom: 2px solid #A9DA05;">

                                            <span class="badge fw-medium rounded-pill text-center"
                                                style="{{ $data->status === 'pending'
                                                    ? 'background-color: red; color: black;'
                                                    : ($data->status === 'menunggu hari'
                                                        ? 'background-color: #14a44ea7; color: rgba(0, 0, 0, 0.647);'
                                                        : 'background-color: #FFC107; color: black;') }}">
                                                {{ $data->status }}
                                            </span>

                                            <div>
                                                <p class="text-black mb-1" style="font-size: 12px;">
                                                    {{ \Carbon\Carbon::parse($data->tanggal_sewa)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Detail Section -->
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="fw-medium mb-1 text-black" style="font-size: 12px;">Nama</p>
                                                <p class="text-black mb-1 ms-auto"
                                                    style="font-size: 12px; margin-left: 20px;">{{ $data->lapangan }}</p>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="fw-medium mb-1 text-black" style="font-size: 12px;">Jam Sewa</p>
                                                <p class="text-black mb-1" style="font-size: 12px;">
                                                    {{ $data->jam_sewa }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            @else
            <section class="px-3" style="padding-bottom: 10px">
                <div class="py-1" style="background-color: hsl(210, 17%, 93%);">

                </div>
            </section>
        @endif


        </section>
        <section class="m-0 flex-grow-1 bg-white mt-2"
            style="padding-bottom: 2px; border-radius: 15px 15px 0 0; overflow: hidden;">
            <div class="m-0">
                <div class="d-flex align-items-center">
                    <h5 class="mt-3 mb-0 ms-3" style="font-size: 20px">Rekomedasi</h5>
                    <a href="/kategory" class="ms-auto mt-4 mb-1 me-3" style="color: #A9DA05; ">Lihat semua</a>
                </div>
            </div>
            <section class="px-3 pt-2">
                <div style="overflow-x: auto; white-space: nowrap; position: relative;">
                    <div style="display: inline-flex; min-width: 100%; width: fit-content;">
                        <!-- Slide 1 -->
                        @foreach ($rekomendasi as $lapangan)
                            <a href={{ route('detaillapangan', $lapangan->id) }}>
                                <div
                                    style="flex-shrink: 0; width: 120px; {{ $loop->last ? '' : 'margin-right: 10px;' }}  position: relative;">
                                    <img src="{{ asset('storage/' . $lapangan->foto) }}" alt="Lapangan"
                                        class="rounded d-block"
                                        style="height: 140px; width: 100%; border: none; box-shadow: none; object-fit: cover;">
                                    <div class="mt-1 text-center">
                                        <p class="mb-0 limit-text " style="font-size: 12px">{{ $lapangan->name }}</p>

                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Slide 2 -->
                    </div>
                </div>
            </section>

        </section>





        <div class="bg-white" <section class="mt-0 flex-grow-1" style="padding-bottom:10px;">
            <div class="d-flex align-items-center mb-2">
                <p class="mt-2 mb-0 ms-3" style="font-size:20px;">Terdekat</p>
            </div>

            <div class="col mb-2">
                @foreach ($terdekat as $data)
                    <div class="card mb-2 me-3 ms-3 border-2 position-relative"
                        style=" border-top-left-radius: 16px; border-bottom-left-radius: 16px;">
                        <a href="{{ route('detaillapangan', $data->id) }}">
                            <div class="d-flex">
                                <!-- Bagian Gambar -->
                                <div style="flex-shrink: 0;">
                                    <img src="{{ asset('storage/' . $data->foto) }}"
                                        style="height: 100%; width: 110px; object-fit: cover; border-top-left-radius: 15px; border-bottom-left-radius: 15px;"
                                        alt="image artikel">
                                </div>
                                <!-- Bagian Teks -->
                                <div class="ms-2 text-start mt-2" style="flex-grow: 1;">
                                    <div class="ms-2">
                                        <p class="mb-0" style="font-size:16px;">{{ $data->name }}</p>
                                        <p class="mb-4 text-secondary" style="font-size:12px;">{{ $data->lokasi_tempat }}
                                        </p>
                                    </div>
                                    <p class=" ms-2 mb-0 text-secondary" style="font-size:12px;">2 KM</p>
                                    <p class=" ms-2 mb-2 mt-0" style="font-size:12px;">
                                        Rp.{{ number_format($data->harga, 0, ',', '.') }}</p>
                                </div>
                                <!-- Button (hidden from flex) -->
                            </div>
                            <!-- Button -->

                            <button type="button" class="btn btn-primary position-absolute"
                                style="height: 30px; width: 70px; font-size: 12px; padding: 0; bottom: 8px; right: 10px;">
                                Pesan
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>


            <section class="px-3 pt-2" style="padding-bottom: 10px">
                <div class="d-flex align-items-center">
                    <p style="font-size:20px " class="mt-0 mb-1 ms-0">Seputar Olahraga</p>
                    <a href="{{ route('artikel') }}" class="ms-auto mt-1 mb-1 text-success">Lihat Semua</a>
                </div>
                <div style="overflow-x: auto; white-space: nowrap; position: relative;" class="pt-0">
                    <div style="display: inline-flex; min-width: 100%; width: fit-content;" class="mt-0">
                        @foreach ($seputarOlahraga as $news)
                            <!-- Slide 1 -->
                            <a href="{{ route('artikel-show', $news->id) }}">
                                <div
                                    style="flex-shrink: 0; height:180px; width: 250px; {{ $loop->last ? '' : 'margin-right: 10px;' }} position: relative;">
                                    <img src="{{ asset('storage/' . $news->image_artikel) }}" alt="L. volly"
                                        class="rounded d-block"
                                        style="height: 100%; width: 100%; border: none; box-shadow: none; object-fit: cover;">

                                    <!-- Text Container -->
                                    <div class="position-absolute rounded-2 bottom-0 start-0 text-white bg-dark bg-opacity-80 fs-9 w-100 text-center p-1"
                                        style="transform: translateY(25%); padding-top: 10px; padding-bottom: 5px">
                                        <!-- Geser ke atas 25% -->
                                        <p class="mb-0" style="font-size: 12px; margin-bottom: -10px;">
                                            {{ $news->judul_artikel }}</p>
                                    </div>
                                </div>
                        @endforeach


                    </div>

                    <!-- Add More Duplicated Slides if Needed -->
                </div>
            </section>

        </div>

        {{-- halaman  --}}
        <section style="padding-bottom: 10px; font-family: 'ubuntu',sans-serif;">
            <div class="bg-white" style="padding-bottom:40px; overflow: hidden; ">
                <div class="d-flex align-items-center">
                    <p style="font-size:20px " class="mt-0 mb-1 ms-3"></p>
                    <a href="{{ route('artikel') }}" class="ms-auto mt-1 mb-1 text-success me-3"></a>
                </div>

            </div>
        </section>
    </div>
    @section('styles')
    <style>
        .splide-btn {
            background-color: #f8f9fa;
            border: none;
            padding: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 50%;
        }

        .splide-btn:hover {
            background-color: #e9ecef;
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        .splide-btn-left {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }

        .splide-btn-right {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }
        .splide-track-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .splide-slide-list {
            display: flex;
            gap: 10px;
           
            transition: transform 0.3s ease-in-out;
            padding-right: 10px;/
        }

        .splide-slide-item {
            flex: 0 0 auto;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            margin-right: 10px;
         
        }

        .splide-slide-image {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .item:last-child {
            margin-right: 0;
            /* Hilangkan margin kanan untuk elemen terakhir */
        }

        .limit-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
            /* Menentukan lebar maksimal elemen */
        }

        .notification-bar {

            background-color: #fefefe;
            border: 1px solid #ddd;
            border-radius: 10px;
            /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
            padding: 10px;
        }

        .notification-header {
            font-size: 12px;
            color: #888;
            display: flex;
            justify-content: space-between;
        }

        .notification-content strong {
            font-size: 14px;
            color: #000;
        }

        .notification-content p {
            font-size: 13px;
            color: #333;
            margin: 0;
        }
    </style>
@endsection

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var carouselElement = document.getElementById('transaksiCarousel');
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: 3000,
                touch: true
            });

            // Tambahkan event listener untuk drag (manual swipe)
            var startX, endX;

            carouselElement.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
            });

            carouselElement.addEventListener('touchmove', function(e) {
                endX = e.touches[0].clientX;
            });

            carouselElement.addEventListener('touchend', function() {
                if (startX > endX) {
                    carousel.next(); // geser ke kanan
                } else {
                    carousel.prev(); // geser ke kiri
                }
            });
            
            let isMouseDown = false;
            let startMouseX;

            carouselElement.addEventListener('mousedown', function(e) {
                isMouseDown = true;
                startMouseX = e.clientX;
            });

            carouselElement.addEventListener('mousemove', function(e) {
                if (!isMouseDown) return;
                endX = e.clientX;
            });

            carouselElement.addEventListener('mouseup', function() {
                if (!isMouseDown) return;
                isMouseDown = false;
                if (startMouseX > endX) {
                    carousel.next(); 
                } else {
                    carousel.prev();
                }
            });
        });
    </script>
@endsection
