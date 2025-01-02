@extends('user.layout')

@section('styles')
    <style>
        .splide {
            position: relative;
            /* Jadikan elemen sebagai acuan posisi untuk button */
            padding-bottom: 10px;
            /* Ruang di bawah sesuai kebutuhan */
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
            /* Styling khusus hanya untuk tombol ini */
            background-color: #f8f9fa;
            color: #495057;
            border: none;
        }

        #header {
            background-color: transparent;
            /* Default background */
            z-index: 1000;
            transition: background-color 0.3s ease;
            /* Transisi latar belakang */
        }

        #header.scrolled {
            background-color: #cad3db;
            /* Warna gelap ketika digulir */
        }

        #header a,
        #header button {
            transition: background-color 0.3s ease;
            /* Efek transisi untuk tombol */
        }

        /* Penyesuaian tombol ketika digulir */
        #header.scrolled a,
        #header.scrolled button {
            background-color: rgba(255, 255, 255, 0.953);
            /* Warna tombol */
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

    <div class="image-container ">
        <div id="header" class="position-fixed w-100 top-0 start-0 bg-transparent transition-all">
            <div class="d-flex justify-content-between align-items-center p-2">
                <!-- Tombol Kembali -->
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
        <img src="{{ asset('storage/'.$artikel->image_artikel) }}" alt="Slide 02" class="splide__image1" />

         
        <div class="content-overlay">
            <div class="d-flex ">
                <p style="font-size: 18px;" class="ms-2 fw-semibold mb-0">{{ $artikel->judul_artikel }}</p>
            </div>
            <p class="fw-medium manfaat-text mt-1" style="font-size: 14px">
               {{ $artikel->isi_artikel }}
            </p>

            <div class="container mt-1">
                <h5 class="mb-3 text-start">Artikel Terkait</h5>
                <div class="row row-cols-2 row-cols-md-3 g-3">
                    @foreach ($relatedArticles as $no => $data )
                    <!-- Card 1 -->
                    <a href="{{ route('artikel-show', $data->id) }}">

                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('storage/'.$data->image_artikel) }}" class="card-img-top rounded" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">{{ $data->judul_artikel }}</p>
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
