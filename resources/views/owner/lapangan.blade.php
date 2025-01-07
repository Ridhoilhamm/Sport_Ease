@extends('owner.layout')

@section('content')
@section('styles')
<style>

</style>
<div style="padding-top: 60px;">
<div class="bg-white mt-2" style="padding-bottom: 10px;">
    <div class="ms-3">
        <div class="d-flex align-items-center" style="padding-top: 5px">
            <h5 class="mb-0 ms-3" style="font-size: 20px;">Lapangan Anda</h5>
            <a href="/owner/tambahlapangan" class=" btn ms-auto mt-2 mb-1 me-4 rounded-pill border-0" style="background-color: #A9DA05; color: white; font-size: 12px">Tambah</a>
        </div>
    </div>
    <section class="px-3 pt-0">
        <div class="ms-3 me-3 mt-2 mb-5">
            <div class="row row-cols-2 g-2 bg-white">
                {{-- @foreach ([['title' => 'Hokky Lapagan Futsal Hokky Lapagan Futsal', 'price' => 'Rp.120.000/Jam', 'discount' => '5%', 'rating' => '4.9', 'sold' => '56', 'image' => asset('image/futsal.jpeg')], ['title' => 'Lapangan Volly', 'price' => 'Rp. 60.000/Jam', 'discount' => '7%', 'rating' => '4.9', 'sold' => '34', 'image' => asset('image/lapangan volly.jpeg')], ['title' => 'Kolam Renang', 'price' => 'Rp. 80.000/Jam', 'discount' => '', 'rating' => '4.8', 'sold' => '20', 'image' => asset('image/kolam-renang.jpg')], ['title' => 'Lapangan Golf ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-golf.jpg')], ['title' => 'Lapangan Tennis ', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tenis.jpg')], ['title' => 'Lapangan Tenis Meja', 'price' => 'Rp 75.000/Jam', 'discount' => '', 'rating' => '4.7', 'sold' => '10', 'image' => asset('image/lapangan-tmeja.jpg')]] as $product) --}}
                @foreach ($lapangan as $no =>$product)
                <a href="{{ route('detaillapangan-owner', $product->id) }}" class="text-decoration-none text-primary">
                    
                    <div class="col mt-1">
                        <div class="card shadow-sm" style="max-width: 200px;">
                            <div class="position-relative">
                                <img src="{{ asset('storage/'.$product->foto) }}" alt="{{ $product->name }}"
                                    style="width:100%; height: 130px; object-fit: cover; font-size: 12px;" class="rounded-top">
                                @if (!empty($product->harga))
                                    {{-- <span class="badge bg-danger position-absolute top-0 start-0 m-2">Terbaru</span> --}}
                                @endif
                            </div>
                            <div class="card-body mb-0 me-2 ms-2" style="padding: 5px">
                                <!-- Hilangkan padding-bottom -->
                                <h6 class="card-title mb-2 mt-1 text-truncate" style="font-size: 14px;">
                                    {{ $product->name }}</h6>
                                <p class="card-text  mb-1 text-success fw-medium text-center"
                                    style="font-size: 16px;">
                                    @if (!empty($product->harga))
                                    @endif
                                </p>
                                    <button type="button" class="btn btn-primary w-100 mt-1"
                                        style="height: 30px; font-size: 12px; padding: 0; line-height: 1;">
                                        Detail
                                    </button>
                               
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Tambahkan Card Lainnya -->
        </div>

    </section>
</div>
</div>
@endsection
