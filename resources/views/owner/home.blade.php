@extends('owner.layout')

@section('content')
    <div style="padding-top:100px">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="bg-white fixed-top">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="d-flex align-items-center ms-2">
                        <img src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                            class="rounded-circle me-2 border border-2 border-secondary"
                            style="height: 40px; width: 40px;" alt="Profile">
                        <div>
                            <p class="m-0 text-muted" style="font-size: 12px">Hallo</p>
                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">{{ auth()->user()->name }}</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 me-2">
                        <img src="{{ asset('image/logo.png') }}" style="height:40px; width:40px;" alt="Logo">
                    </div>
                </div>
        
                <!-- Garis pemisah -->
                <div class="py-1" style="background-color: #e5e5e5;"></div>
        
                <!-- Filter Transaksi -->
                <div class="container mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-semibold text-dark m-0">Jadwal Pemesanan</p>
                        <form method="GET" action="{{ route('transaksi.index') }}" class="d-flex align-items-center gap-2">
                            <label for="filter" class="text-muted mb-0" style="font-size: 14px;">Cari</label>
                            <select name="filter" id="filter" class="form-select form-select-sm" style="min-width: 140px;"
                                onchange="toggleDateInput(); this.form.submit()">
                                <option value="hari ini" {{ request('filter') == 'hari ini' ? 'selected' : '' }}>Hari Ini</option>
                                <option value="besok" {{ request('filter') == 'besok' ? 'selected' : '' }}>Besok</option>
                                <option value="tanggal" {{ request('filter') == 'tanggal' ? 'selected' : '' }}>Pilih Tanggal</option>
                            </select>
                            <input type="date" name="selected_date" id="selected_date"
                                class="form-control form-control-sm"
                                value="{{ request('selected_date') }}" style="display: none; min-width: 150px;"
                                onchange="this.form.submit()">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        
       
        

        <div class="container mt-2 bg-white" style="padding-top:10px; padding-bottom:15px;">
            {{-- Jika ada transaksi --}}
            @if ($transaksi->isNotEmpty())
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
                            <span class="ms-auto">
                                {{ ucwords($product->user->name) }}
                            </span>
                        </div>
                        <div class="d-flex align-items-center" style="padding-top: 10px">
                            <img src="{{ asset('storage/' . $product->getlapangan->foto) }}" alt="{{ $product->lapangan }}"
                                class="me-3 rounded" style="height: 80px; width: 80px; object-fit: cover;">
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
                        <a href="{{ route('detail-transaksi-owner', $product->id) }}" class="data-link text-decoration-none">
                            <button class="btn btn-primary w-100 mt-3 rounded-pill fw-semibold" style="font-size: 14px;">
                                Lihat indentitas
                            </button>
                        </a>
                    </div>
                @endforeach
            @else
                {{-- Jika tidak ada transaksi, tampilkan animasi --}}
                <div class="bg-white mt-2 text-center" id="chat-animation" style="width: 100%; padding-bottom:22px;">
                    <div class="justify-content-center" style="padding-top: 20px">
                        <p class="text-center">Jadwal Pemesanan selesai tidak ada</p>
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
            @endif
        </div>
    </div>
    
    @php
    $hideNavbar = true;
    $hideFooter = true;
    @endphp

<script>
    function toggleDateInput() {
        var filter = document.getElementById('filter').value;
        var dateInput = document.getElementById('selected_date');
        dateInput.style.display = (filter === 'tanggal') ? 'inline-block' : 'none';
    }

    // Pastikan input tanggal tampil jika sebelumnya sudah dipilih
    document.addEventListener("DOMContentLoaded", function() {
        toggleDateInput();
    });
</script>

@endsection