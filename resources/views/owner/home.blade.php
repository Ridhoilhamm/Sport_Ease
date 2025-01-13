@extends('owner.layout')
@section('content')
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

        /* Track dan Slide */
        .splide-track-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .splide-slide-list {
            display: flex;
            gap: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .splide-slide-item {
            flex: 0 0 auto;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
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
            /* Mencegah teks membungkus ke baris berikutnya */
            overflow: hidden;
            /* Menyembunyikan teks yang melebihi batas elemen */
            text-overflow: ellipsis;
            /* Menambahkan elipsis (...) di akhir teks yang terpotong */
            max-width: 150px;
            /* Menentukan lebar maksimal elemen */
        }
</style>
@endsection
<div style="padding-top: 50px;">
    <!-- Konten Anda -->

   
    </div>
    <div class="bg-white mt-2" id="chat-animation" style="width: 100%: 200px; padding-bottom:22px" >
        <div class="justify-content-center" style="padding-top: 20px">
            <p class= " text-center">Belum Ada Pesananan</p>
        </div>
        <script>
        var chatAnimation = lottie.loadAnimation({
            container: document.getElementById('chat-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('image/Animation - 1736755063867.json') }}' // Sesuaikan dengan lokasi file JSON
        });
    </script>
    </div>

</div>
@endsection

