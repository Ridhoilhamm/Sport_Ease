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
.article-title {
            font-size: 16px;
            font-weight: bold;
            color: #2c3e50;
        }
        .article-subtitle {
            font-size: 14px;
            color: #7f8c8d;
        }
        .article-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .article-card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        
        
        .truncated-text {
        display: -webkit-box; /* Membuat elemen menjadi box untuk mendukung line-clamp */
        -webkit-line-clamp: 2; /* Menentukan jumlah baris maksimum */
        -webkit-box-orient: vertical; /* Mengatur orientasi box ke vertikal */
        overflow: hidden; /* Menyembunyikan teks yang melampaui batas */
        text-overflow: ellipsis; /* Menambahkan titik-titik (...) di akhir teks */
    }
    a {
            color: inherit;
            /* Mengambil warna dari elemen pembungkus */
            text-decoration: none;
            /* Menghilangkan garis bawah */
        }

</style>
@endsection

@section('content')
    
        
    
    <div>
        <div class="bg-white mb-2" style="padding-bottom: 10px">
            
            <section class="splide mt-0 bg-white" style="padding-bottom: 10px">
                {{-- <a href="/user">
                    
                    <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle p-2 shadow fixed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </button>
            </a> --}}
            <div class="splide__track" style="padding-bottom: 5px">
                <ul class="splide__list"> 
                    @foreach ($artikel as $no => $data )
                    <li class="splide__slide">
                        <a href="{{ route('artikel-show', $data->id) }}">
                                <img src="{{ asset('storage/'.$data->image_artikel) }}" alt="Slide 01" class="splide__image1 img-fluid"  />
                                <div class="slide-caption">
                                    <h3>{{ $data->judul_artikel }}</h3>
                                    <p>Setiap hari</p>
                                </div>
                            </a>
                        </li>
                        
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </section>
        </div>
        
        
        <section class="bg-white " style="padding-bottom: 20px; padding-top:0px">
            
            <!-- Kartu Daftar -->
            <div class="container mb-5">
                <div style="padding-top:4px">
                    
                    <p style="font-size: 20px " class="mt-1 fw-medium">Rekomendasi</p>
                </div>
                
                
                @foreach ($artikel as $no => $data )
                <div class="row g-3">
                    <!-- Artikel 1 -->
                    <a href="{{ route('artikel-show', $data->id) }}">
                        
                        <div class="col-12">
                            <div class="article-card bg-white">
                               
                                <img src="{{ asset('storage/'.$data->image_artikel) }}">
                                </div>
                                
                                <div class="text-start me-3">
                                    <p class=" mt-2 mb-4 truncated-text" style="font-size: 12px">
                                        {{ $data->isi_artikel }}
                                    </p>
                                </div>
                                
                            </div>
                        </a>
                        
                        
                        
                    </div>
                    @endforeach
                </div>
                
            </section>
            
            
    </div>

@endsection

@php
    $hideNavbar=true;
@endphp