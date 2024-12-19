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
    </style>
@endsection

@section('content')
    <div class="image-container ">
        <a href="/user">
            <button class="btn btn-light position-fixed  top-0 start-0 m-3 rounded-pill p-2 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </button>
        </a>
        <img src="{{ asset('image/sepeda.jpg') }}" alt="Slide 02" class="splide__image1" />


        <div class="content-overlay" >
            <div class="container d-flex mt-2 mb-2">
                <img src="{{ asset('image/logo.png') }}" style="height:30px; width:20px" alt="logo">
                <p style="font-size: 18px;" class="ms-2 fw-medium">Sport Ease</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="currentColor"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-rosette-discount-check icon-custom">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                </svg>
            </div>
            <p class="fw-medium manfaat-text" style="font-size: 14px">
                Manfaat Bersepeda untuk Kesehatan dan Lingkungan
                Bersepeda bukan hanya aktivitas rekreasi, tetapi juga salah satu bentuk olahraga yang memberikan banyak
                manfaat. Selain membantu menjaga kesehatan tubuh, bersepeda juga ramah lingkungan.
                <span>
                    Selain memberikan dampak positif bagi kesehatan, bersepeda juga ramah lingkungan. Menggunakan sepeda
                    sebagai alat transportasi dapat mengurangi emisi gas rumah kaca yang dihasilkan oleh kendaraan bermotor,
                    sehingga membantu mengurangi polusi udara. Bersepeda juga membutuhkan ruang jalan yang lebih kecil,
                    membantu mengurangi kemacetan di perkotaan. Dengan beralih ke sepeda, kita dapat berkontribusi dalam
                    menjaga keberlanjutan lingkungan serta menciptakan kota yang lebih hijau dan nyaman untuk dihuni.
                    <br />
                    Bersepeda adalah aktivitas sederhana yang memberikan banyak manfaat, baik untuk kesehatan fisik maupun
                    mental. Dengan rutin bersepeda, Anda dapat meningkatkan kesehatan jantung, memperkuat otot, dan
                    memperbaiki sirkulasi darah, sehingga mengurangi risiko penyakit kardiovaskular. Selain itu, bersepeda
                    membantu membakar kalori dan meningkatkan metabolisme tubuh, menjadikannya cara efektif untuk menjaga
                    berat badan ideal. Tak hanya itu, aktivitas ini juga berdampak positif pada kesehatan mental, seperti
                    mengurangi stres, meningkatkan mood, dan memberikan efek relaksasi melalui udara segar serta pemandangan
                    sekitar. Bersepeda juga ramah lingkungan, sehingga bermanfaat sebagai sarana transportasi yang mendukung
                    keberlanjutan dan mengurangi polusi udara.
                </span>
            </p>

            
                <div class="container mt-1">
                    <h5 class="mb-3 text-start">Artikel Terkait</h5>
                    <div class="row row-cols-2 row-cols-md-3 g-3">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                        <div class="col">
                            <div class="card-body rounded text-start">
                                <img src="{{ asset('image/lari.jpg') }}" class="card-img-top rounded" style="height:150px; width:100%" alt="Artikel 1">
                            </div>
                            <p style="font-size: 12px" class="fw-medium text-start">Kenjuaraan lari nasional berhasil dimenangkan</p>
                        </div>
                
                    </div>
                </div>
                


        </div>

    </div>
@endsection
@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
