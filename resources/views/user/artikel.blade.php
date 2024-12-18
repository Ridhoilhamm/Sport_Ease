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
        border-radius: px;
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
        display: none;
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

    .form-control, .form-select {
background-color: #33333300;
color: #ffffff;
border: 1px solid #6260609a;
border-radius: 10px;
padding: 12px;
}

.slide-caption {
    position: absolute;
    bottom: 0; /* Letakkan di bagian bawah slide */
    left: 0;
    width: 100%; /* Penuhi lebar slide */
    text-align: center;
    color: white;
    background: rgba(0, 0, 0, 0.7); /* Background transparan */
    padding: 10px 0; /* Tambahkan padding */
}

.slide-caption h3 {
    margin: 0;
    font-size: 1.2rem;
    font-weight: bold;
}

.slide-caption p {
    margin: 5px 0 0;
    font-size: 0.9rem;

    
}
.stretched-link {
    position: absolute;
    inset: 0;
    z-index: 1;
    text-decoration: none;
}


</style>
@endsection

@section('content')


    <div>
        <div class="bg-white mb-2" style="padding-bottom: 10px">

            <section class="splide mt-0 bg-white" style="padding-bottom: 10px">
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
                <div class="splide__track" style="padding-bottom: 5px">
                    <ul class="splide__list"> 
                        <li class="splide__slide">
                            <a href="/detailartikel">
                                <img src="{{ asset('image/lari.jpg') }}" alt="Slide 01" class="splide__image1 img-fluid"  />
                                <div class="slide-caption">
                                    <h3>Bahaya Lari</h3>
                                    <p>Setiap hari</p>
                                </div>
                            </a>
                            
                        </li>
                        <li class="splide__slide">
                            <a href="/detailartikel">
                                <img src="{{ asset('image/sepeda.jpg') }}" alt="Slide 02" class="splide__image1" />
                                <div class="slide-caption">
                                    <h3>Bahaya Lari</h3>
                                    <p>Setiap hari</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="/detailartikel">
                                <img src="{{ asset('image/ball.jpg') }}" alt="Slide 03" class="splide__image1" />
                                <div class="slide-caption">
                                    <h3>Sepak Bola</h3>
                                    <p>Menjadi Olahraga Populer</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/download.jpeg') }}" alt="Slide 03" class="splide__image1" />
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('image/lapangan-golf.jpg') }}" alt="Slide 03" class="splide__image1" />
                        </li>
                    </ul>
                </div>
            </section>
        </div>
       

            
            <section class="bg-white " style="padding-bottom: 20px; padding-top:0px">

                <!-- Kartu Daftar -->
                <div class="container mb-5">
                    <div style="padding-top:4px">

                        <p style="font-size: 22px " class="mt-1 fw-semibold">Recomendasi</p>
                    </div>
                    
                            
                        <div class="col-12 col-md-6 mb-2">
                            <div class="card border-0 shadow rounded-4 overflow-hidden">
                                <a href="/detailartikel" class="stretched-link"></a>
                                <div class="row g-0">
                                    <!-- Gambar -->
                                    <div class="col-4">
                                        <img src="{{ asset('image/lari.jpg') }}" alt="Boulder Flatirons Rock Climbing" class="img-fluid h-100 w-100 object-fit-cover">
                                    </div>
                                    <!-- Konten -->
                                    <div class="col-8">
                                        <div class="card-body">
                                            <p class="card-title mb-2">Bahaya Lari</p>
                                            <p style="font-size: 12px" class="mt-4"> Bila Dilakukan Setiap Hati</p>
                                            <a href="#" class="btn btn-success  fw-bold rounded-pill px-3 py-1 mt-5">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="card border-0 shadow rounded-4 overflow-hidden">
                                <a href="/detailartikel" class="stretched-link"></a>
                                <div class="row g-0">
                                    <!-- Gambar -->
                                    <div class="col-4">
                                        <img src="{{ asset('image/lari.jpg') }}" alt="Boulder Flatirons Rock Climbing" class="img-fluid h-100 w-100 object-fit-cover">
                                    </div>
                                    <!-- Konten -->
                                    <div class="col-8">
                                        <div class="card-body">
                                            <p class="card-title mb-2">Bahaya Lari</p>
                                            <p style="font-size: 12px" class="mt-4"> Bila Dilakukan Setiap Hati</p>
                                            <a href="#" class="btn btn-success  fw-bold rounded-pill px-3 py-1 mt-5">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow rounded-4 overflow-hidden">
                                <div class="row g-0">
                                    <!-- Gambar -->
                                    <div class="col-4">
                                        <img src="{{ asset('image/lari.jpg') }}" alt="Boulder Flatirons Rock Climbing" class="img-fluid h-100 w-100 object-fit-cover">
                                    </div>
                                    <!-- Konten -->
                                    <div class="col-8">
                                        <div class="card-body">
                                            <p class="card-title mb-2">Bahaya Lari</p>
                                            <p style="font-size: 12px" class="mt-4"> Bila Dilakukan Setiap Hati</p>
                                            <a href="#" class="btn btn-success  fw-bold rounded-pill px-3 py-1 mt-5">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kartu 2 -->
                        
                    </div>
                </div>
                
            </section>
            
            
    </div>

@endsection

@php
    $hideNavbar=true;
@endphp