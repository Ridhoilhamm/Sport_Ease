@extends('owner.layout')
@section('content')
<div style="padding-top: 50px;">
    <!-- Konten Anda -->
    <div class="bg-white mt-2" style="padding-bottom: 10px;">
        <div class="m-2">
            <div class="d-flex align-items-center" style="padding-top: 5px">
                <h5 class="mb-0 ms-1" style="font-size: 20px;">Lapangan Anda</h5>
                <p href="" class="ms-auto mt-4 mb-1 me-3" style="color: #A9DA05;">Lihat semua</p>
            </div>
        </div>
        <section class="px-3 pt-0">
            <div style="overflow-x: hidden; white-space: nowrap; position: relative;">
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
    </div>
    <div class="bg-white mt-2" id="chat-animation" style="width: 100%: 200px;" >
        <div class="justify-content-center" style="padding-top: 20px">
            <p class= " text-center">Belum Ada Booking</p>
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

