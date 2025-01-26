@extends('user.layout')

@section('content')
    <div>
        <div class="container  fixed-top d-flex justify-items-center bg-white " style=" padding-top:10px; padding-bottom: 10px; ">
            <a href="/data-diri">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </a>
            <p class=" container fw-semibold" style="color:rgba(0, 0, 0, 0.686)">Favorite Lapangan</p>
        </div>
        <div>
            
        </div>
        <div class="bg-white" style="padding-top: 50px;" >
            <div class="container" style="padding-bottom:20px; padding-top:10px">

                <div class="container rounded mt-2 border border-dark" style="; padding-bottom:10px">
                    <div class="custom-card mt-2 ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('image/badminton.jpg') }}" style="height: 70px; width:70px; " alt="Restaurant"
                                class="me-3 rounded">
                            <div class="flex-grow-1">
                                <div class="title">Lapangan Badminton Indra</div>
                                <div class="d-flex align-items-center icon-text">
                                    <i class="bi bi-clock me-1"></i> 45 min &bull; <i class="bi bi-geo me-1 ms-2"></i> Italian
                                </div>
                                <div class="icon-text text-secondary">
                                    <i class="bi bi-geo-alt-fill me-1"></i> Jalan Nginden Semolo
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold" style="font-size: 12px">Hapus dari
                            Favorit</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @php
        $hideNavbar = true;
        $hideFooter = true;
    @endphp
@endsection
