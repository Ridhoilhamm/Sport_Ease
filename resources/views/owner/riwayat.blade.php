@extends('owner.layout')




@section('styles')
    <style>
        /* Gaya untuk tautan */
        a {
            text-decoration: none;
            color: #808080;
            padding: 8px 12px;
            transition: border-color 0.2s;
        }

        .active-link {
            border-bottom: 2px solid #A9DA05;
            color: #A9DA05;
            font-weight: bold;
        }

        .data-link {
            text-decoration: none;
            color: inherit;
            padding: 0;
            transition: none;
            cursor: pointer;
        }

        .data-link:hover,
        .data-link.active-link {
            color: inherit;
            border-bottom: none;
        }

        .container {
            overflow-x: auto;
        }

        /* Menyembunyikan scrollbar pada elemen Webkit */
        .overflow::-webkit-scrollbar {
            display: none;
        }
        .fixed-top {
            z-index: 1050;
        }
        .content-wrapper {
            padding-top: 80px;
        }
        .form-control::placeholder {
    color: #808080 !important; /* Warna abu-abu */
    opacity: 1; /* Pastikan tidak transparan */
}

    </style>
@endsection

@section('content')
    <!-- Tombol Kembali -->
    <a href="/riwayat-owner" id="row" class="btn btn-light rounded-circle p-2 shadow"
        @if (Request::is('owner-riwayat*') && Request::has('somequery')) style="display: block;" @else style="display: none;" @endif>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M15 6l-6 6l6 6" />
        </svg>
    </a>

    <!-- Form pencarian -->
    <div class="fixed-top  rounded-lg shadow-md">
        <form method="GET" action="{{ route('owner-riwayat') }}"
            class=" container bg-white d-flex justify-content-between align-items-center mt-0" style="padding-top: 5px; padding-bottom:5px;">
     
            <input type="text" name="query" class="form-control mt-1 me-2 rounded text-secondary border-dark" 
       placeholder="Cari Transaksi disini">

     
                <p  class=" mt-1 border-0 bg-white" data-bs-toggle="modal" data-bs-target="#filterModal"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-filter"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" /></svg></p>
          
        </form>
        <div class="py-1" style="background-color: hsl(210, 17%, 93%);">

        </div>
        

    </div>

    <!-- Modal untuk filter -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">Pilih Filter</h5>
                </div>
                <div class="modal-body">
                    <form method="GET" action="{{ route('owner-riwayat') }}">
                        <div class="row">  
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-center">
                                <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">    
                            </div>
                            <div class="col-12 col-sm-6 mb-2">
                                <select name="bulan" class="form-control">
                                    <option value="">Pilih Bulan</option>
                                    <option value="1" {{ request('bulan') == 1 ? 'selected' : '' }}>Januari</option>
                                    <option value="2" {{ request('bulan') == 2 ? 'selected' : '' }}>Februari</option>
                                    <option value="3" {{ request('bulan') == 3 ? 'selected' : '' }}>Maret</option>
                                    <option value="4" {{ request('bulan') == 4 ? 'selected' : '' }}>April</option>
                                    <option value="5" {{ request('bulan') == 5 ? 'selected' : '' }}>Mei</option>
                                    <option value="6" {{ request('bulan') == 6 ? 'selected' : '' }}>Juni</option>
                                    <option value="7" {{ request('bulan') == 7 ? 'selected' : '' }}>Juli</option>
                                    <option value="8" {{ request('bulan') == 8 ? 'selected' : '' }}>Agustus</option>
                                    <option value="9" {{ request('bulan') == 9 ? 'selected' : '' }}>September</option>
                                    <option value="10" {{ request('bulan') == 10 ? 'selected' : '' }}>Oktober</option>
                                    <option value="11" {{ request('bulan') == 11 ? 'selected' : '' }}>November</option>
                                    <option value="12" {{ request('bulan') == 12 ? 'selected' : '' }}>Desember</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-center">
                                <select name="tahun" class="form-control">
                                    <option value="">Pilih Tahun</option>
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper" style="padding-top:50px">
       
        <div class="bg-white mb-2 mt-0" style="padding-bottom: 65px; padding-top:17px;">
            <div class="ms-3 me-3">
                @if ($notFound)
                    <div class="bg-white mt-2" id="chat-animation" style="width: 100%; padding-bottom:22px;">
                        <div class="justify-content-center" style="padding-top: 20px">
                            <p class="text-center">Status Transaksi selesai tidak ada</p>
                        </div>
                        <script>
                            var chatAnimation = lottie.loadAnimation({
                                container: document.getElementById('chat-animation'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: '{{ asset('image/Animation - 1736749790291.json') }}'
                            });
                        </script>
                    </div>
                @else
                    <div class="row row-cols-1 g-3 px-2 py-3 bg-white">
                        @foreach ($transaksi as $product)
                            @php
                                \Carbon\Carbon::setLocale('id');
                            @endphp
                            <div class="container rounded mt-3 p-3 border border-dark"
                                style="background-color: white; border-color: rgba(0, 0, 0, 0.676);">
                                <div class="d-flex mb-2 align-items-center border-bottom"
                                    style="padding-bottom: 10px; border-color: 1px solid rgba(0, 0, 0, 0.676);">
                                    <p class="text-secondary m-0" style="font-size: 14px;">
                                        {{ \Carbon\Carbon::parse($product->tanggal_sewa)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                    <span
                                        class="badge ms-auto {{ $product->status === 'menunggu hari'
                                            ? 'background-color: #14a44ea7; color: rgba(0, 0, 0, 0.647);'
                                            : ($product->status === 'pending'
                                                ? 'bg-danger text-black'
                                                : 'bg-warning text-dark') }} fw-medium rounded-pill text-center"
                                        style="background-color:#14a44ea7; color:rgba(0, 0, 0, 0.647)">
                                        {{ $product->status }}
                                    </span>
                                </div>
                                <div class="d-flex align-items-center" style="padding-top: 10px">
                                    <img src="{{ asset('storage/' . $product->getlapangan->foto) }}"
                                        alt="{{ $product->lapangan }}" class="me-3 rounded"
                                        style="height: 80px; width: 80px; object-fit: cover;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 text-dark">{{ $product->lapangan }}</h6>
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted">Jam Sewa:</small>
                                            <small class="ms-2 text-dark">{{ $product->jam_sewa }} WIB</small>
                                        </div>
                                        <small class="text-secondary d-block">
                                            {{ $product->getlapangan->lokasi_tempat }}
                                        </small>
                                    </div>
                                </div>
                                <a href="{{ route('detail-riwayat-owner', $product->id) }}"
                                    class="data-link text-decoration-none">
                                    <button class="btn btn-primary w-100 mt-3 rounded-pill fw-semibold"
                                        style="font-size: 14px;">
                                        Lihat Detail
                                    </button>
                                </a>
                            </div>
                        @endforeach
                    </div>



            </div>
            @endif
        </div>
    @php
        $hideNavbar= true;
    @endphp
    </div>
    </div>



@endsection