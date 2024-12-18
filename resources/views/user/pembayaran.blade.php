@extends('user.layout')

@section('styles')
    <style>
        .custom-button{
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
    <!-- Header -->
    <div class="mb-1 bg-white rounded">
        <div class="container" style="padding-top: 10px">
            <div class="mb-2 d-flex align-items-center" style="border-bottom: 2px solid #0b0b0b5e;">
                <a href="/detaillapangan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>

                </a>
                <h5 class="fw-semibold mb-2 mt-2 ms-2">Pembayaran</h5>

            </div>
            <p class="text-muted mb-0 ms-2">Anda</p>
            <p class="fw-semibold ms-auto" style="padding-bottom: 10px">
                <i class="bi bi-geo-alt-fill text-success ms-2"></i> Ridho Ilham Ds
            </p>
        </div>
    </div>
    <div class="bg-white mb-2" style="padding-top: 5px; padding-bottom:5px">

        <div class="container mt-2">

            <!-- Produk -->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('image/futsal.jpeg') }}" style="height: 80px; width:80px"
                            class="img-fluid rounded me-3" alt="Produk">
                        <div>
                            <h6 class="mb-1">Lapangan Futsal Hokky</h6>
                            <small class="text-muted">Sewa: 10:00 - 11:00</small>
                            <p class="fw-bold mt-1">Rp120.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pilih Pengiriman -->
            <div class="mt-4">
                <!-- Pilih Opsi Pembayaran -->
                <div class="card mb-2">
                    <div class="card-body d-flex align-items-center">
                        <h6 class="fw-semibold mb-0">Pilih Opsi Pembayaran</h6>
                        <div class="ms-auto">
                            <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-chevron-right" data-bs-toggle="collapse"
                                data-bs-target="#paymentOptions" aria-expanded="false" aria-controls="paymentOptions">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div>
                    </div>
                    <div class="collapse" id="paymentOptions">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>COD (Bayar di tempat)</span>
                                <input type="radio" name="paymentMethod" class="form-check-input">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Kartu Kredit</span>
                                <input type="radio" name="paymentMethod" class="form-check-input">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Transfer Bank</span>
                                <input type="radio" name="paymentMethod" class="form-check-input">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Dompet Digital</span>
                                <input type="radio" name="paymentMethod" class="form-check-input">
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Dropdown Options -->

            </div>

        </div>


        <div class="container mt-1">
            <!-- Catatan -->
            <div class="card mb-2">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <!-- Teks dengan modal -->
                    <h6 class="fw-bold mb-0"  style="margin-bottom: 4px;">
                        Kasih Catatan
                    </h6>

                    <!-- Ikon dengan fungsi klik -->
                    <div data-bs-toggle="modal" data-bs-target="#noteModal">
                        <p class="mb-0" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-chevron-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </p>
                    </div>
                </div>
                <!-- Catatan -->
                <p id="note-display" class="mb-2 ms-3 mt-0 text-secondary" style="margin-top: 4px; margin-bottom: 0;">
                    Belum ada catatan.
                </p>
            </div>



            <!-- Modal -->

            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="modal-header">Catatan buat pesanan ini</div>
                    <div class="modal-body">
                        <textarea id="order-note" placeholder="Pastikan tidak ada data pribadi, ya."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="close-btn" onclick="closeModal()">Batal</button>
                        <button class="save-btn" onclick="saveNote()">Simpan</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Header Modal -->
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title" id="promoModalLabel">Spesial buat kamu! ✨</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Body Modal -->
                <div class="modal-body" style="font-family: ubuntu">
                    <!-- Promo Aktif -->
                    <div class="promo-card mb-3 ms-auto">
                        <span class="promo-card-icon">
                            <label class="toggle-switch ms-auto">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </span>
                        <h6 class="mb-1 fw-bold text-success">Pembookingan Pertama</h6>
                        <p class="mb-0 text-muted" >Promo khusus pengguna baru</p>
                        <p class="mb-0 text-muted">Berakhir dalam <strong>6 hari</strong></p>
                    </div>
                    <div class="promo-card mb-3 ms-auto">
                        <span class="promo-card-icon">
                            <label class="toggle-switch ms-auto">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </span>
                        <h6 class="mb-1 fw-bold text-success">Pembookingan Pertama</h6>
                        <p class="mb-0 text-muted" >Promo khusus pengguna baru</p>
                        <p class="mb-0 text-muted">Berakhir dalam <strong>6 hari</strong></p>
                    </div>

                    <!-- Promo Tidak Aktif -->
                    <div class="promo-card mb-3" style="background-color: #f9f9f9;">
                        <span class="promo-card-icon text-danger">❌</span>
                        <h6 class="mb-1 fw-bold text-secondary">Bebas Ongkir</h6>
                        <p class="mb-0 text-muted">Rp11.500 <span class="fw-normal">Khusus Reguler</span></p>
                        <p class="mb-0 text-warning">Belum bisa dipakai dengan promo yang dipilih.</p>
                    </div>

                    <!-- Tautan Promo Lain -->
                    <a href="#" class="text-success fw-bold">Lihat 1 Promo Lainnya</a>
                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success w-100 btn-back" data-bs-dismiss="modal">Balik</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Promo -->
    <div class=" promo-banner  mb-2 text-center d-flex ">
        <div class="container d-flex">

            <i class="bi bi-tag-fill me-1"></i> Yuk, pakai kupon promo! <strong>Bisa hemat hingga Rp30.000</strong>
            <div class="ms-auto me-2 mt-2" data-bs-toggle="modal" data-bs-target="#promoModal">
                <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 6l6 6l-6 6" />
                </svg>
            </div>
        </div>
        {{-- <div class="ms-auto">

            <label class="toggle-switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div> --}}
    </div>
    <div class="bg-white" style="padding-top: 3px; padding-bottom:60px">

        <div class="container">
            <!-- Button to open the modal -->

            <!-- Modal Structure -->
            <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="noteModalLabel">Catatan buat pesanan ini</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" id="orderNote" placeholder="Pastikan tidak ada data pribadi, ya." rows="4"
                                        maxlength="200"></textarea>
                                    <div class="d-flex justify-content-between mt-1">
                                        <small class="text-muted">0/200</small>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ringkasan Transaksi -->
            <div class="mb-2 bg-white rounded" style="padding-bottom: 10px; padding-top: 8px">
                <h6 class="fw-semibold ms-2">Cek ringkasan transaksimu, yuk</h6>
                <div class="d-flex justify-content-between ms-2 me-2">
                    <span>Total Harga</span>
                    <span class="fw-bold">Rp120.000</span>
                </div>
                <div class="d-flex justify-content-between ms-2 me-2">
                    <span>Total Tagihan</span>
                    <span class="fw-bold">Rp120.000</span>
                </div>
            </div>

            <!-- Tombol Checkout -->
            <div class="text-center ">
                <a href="/informasi pembayaran">

                    <button class="btn btn-success w-100 custom-button" 
        style="background-color: #a8da05; color: #ffffff; padding: 12px; border-radius: 8px; border: none; font-weight: bold;">
    Lanjutkan
</button>

                </a>
            </div>
        </div>

        {{-- modal --}}
    </div>

    </div>
@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
