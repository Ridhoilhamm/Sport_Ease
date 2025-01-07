@extends('owner.layout')
@section('content')
<div style="padding-top: 50px;">
    <!-- Konten Anda -->
    <div class="bg-white mt-2" style="padding-bottom: 25px;">
        <section class="m-0 flex-grow-1 bg-white"
        style="padding-bottom: 10px; border-radius: 15px 15px 0 0; overflow: hidden;">
        <div class="m-0">
            <div class="d-flex align-items-center">
                <h5 class="mt-3 mb-0 ms-3" style="font-size: 20px">Rekomedasi</h5>
                <p href="" class="ms-auto mt-4 mb-1 me-3" style="color: #A9DA05; ">Lihat semua</p>
            </div>
        </div>
        {{-- <div class="m-2">
            <div class="d-flex align-items-center mb-2" style="padding-top: 10px">
                <h5 class="mb-2 ms-1" style="font-size: 20px;">Lapangan Anda</h5>
            </div>
        </div> --}}
        <section class="px-3  ">
            <div style="white-space: nowrap; position: relative;">
                <div style="display: inline-flex; min-width: 100%; width: fit-content;">
                    <!-- Slide 1 -->
                    @foreach ($haji as $data)
                    <div style="flex-shrink: 0; width: 120px; margin-right: 10px; position: relative;">
                        <img src="{{ 'storage/'.$data->foto }}" alt="Lapangan" class="rounded d-block"
                            style="height: 140px; width: 100%; border: none; box-shadow: none; object-fit: cover;">
                        <div class="mt-1 text-center" style="max-width: 100px;">
                            <p class="mb-0 text-truncate" style="font-size: 12px;">
                                L. {{ $data->name }}
                            </p>
                        </div>
                    </div>
                    @endforeach
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

