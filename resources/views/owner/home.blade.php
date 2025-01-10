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

    <section class="m-0 flex-grow-1 bg-white"
            style="padding-bottom: 10px; border-radius: 15px 15px 0 0; overflow: hidden;">
            <div class="m-0">
                <div class="d-flex align-items-center">
                    <h5 class="mt-3 mb-0 ms-3" style="font-size: 20px">Lapangan, {{ Auth::user()->name }}</h5>
                    <a href="/owner/lapangan" class="ms-auto mt-4 mb-1 me-3" style="color: #A9DA05; ">Lihat semua</a>
                </div>
            </div>
            <section class="px-3 pt-2">
                <div style="overflow-x: auto; white-space: nowrap; position: relative;">
                    <div style="display: inline-flex; min-width: 100%; width: fit-content;">
                        <!-- Slide 1 -->
                        @foreach ($lapangan as $data)
                            <a href={{ route('detaillapangan-owner', $data->id) }}>
                                <div
                                    style="flex-shrink: 0; width: 120px; {{ $loop->last ? '' : 'margin-right: 10px;' }}  position: relative;">
                                    <img src="{{ asset('storage/' . $data->foto) }}" alt="Lapangan"
                                        class="rounded d-block"
                                        style="height: 140px; width: 100%; border: none; box-shadow: none; object-fit: cover;">
                                    <div class="mt-1 text-center">
                                        <p class="mb-0 limit-text " style="font-size: 12px">{{ $data->name }}</p>

                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Slide 2 -->
                    </div>
                </div>
            </section>

        </section>
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
            path: '{{ asset('image/Animation - 1736136887568.json') }}' // Sesuaikan dengan lokasi file JSON
        });
    </script>
    </div>

</div>
@endsection

