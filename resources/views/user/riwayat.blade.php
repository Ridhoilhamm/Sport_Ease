@extends("user.layout")

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Data Transaksi</h1>

    <!-- Tabs untuk filter status -->
    <ul class="nav nav-tabs justify-content-center" id="filterTabs" role="tablist">
        <li class="nav-item">
            <a href="{{ route('transaksi.filter', 'waiting') }}" 
               class="nav-link {{ isset($status) && $status === 'menunggu hari' ? 'active' : '' }}">
                Menunggu Hari
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('transaksi.filter', 'completed') }}" 
               class="nav-link {{ isset($status) && $status === 'selesai' ? 'active' : '' }}">
                Selesai
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('transaksi.filter', 'rejected') }}" 
               class="nav-link {{ isset($status) && $status === 'batal' ? 'active' : '' }}">
                Batal
            </a>
        </li>
    </ul>

    <!-- Konten data transaksi -->
    <div class="mt-4">
        @if (isset($transaksi) && !$transaksi->isEmpty())
    <div class="list-group">
        @foreach ($transaksi as $item)
            <div class="list-group-item">
                <p>ID Transaksi: {{ $item->id }}</p>
                <p>Status: {{ $item->status }}</p>
                <p>Total: Rp. {{ number_format($item->total, 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
@else
    <p class="text-center">Tidak ada data transaksi dengan status "{{ $status ?? 'semua' }}".</p>
@endif

    </div>
</div>
@endsection
