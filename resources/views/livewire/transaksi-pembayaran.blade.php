<div>
    <div class="fixed-bottom bg-white" style="padding-top: 3px; padding-bottom:20px;">
        <div class="container text-center d-flex justify-items-center" style="padding-top: 10px; font-family: ubuntu">
            <p class="fw-bold" style="font-size: 18px; color:#A9DA05">
                Rp. {{ $lapangan->harga }}
            </p>
            <button class="ms-auto btn btn-success custom-button" data-bs-toggle="modal"
                data-bs-target="#detail-pembayaran"
                style="background-color: #A9DA05; color: #ffffff; padding: 12px; border-radius: 8px; border: none; font-weight: bold;">
                Lanjutkan
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detail-pembayaran" tabindex="-1" aria-labelledby="detaipembayaran" aria-hidden="true" style="font-family: ubuntu">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-start" id="exampleModalLabel">Detail Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="container fw-semibold mb-0 justify-content-center">
                        Data Pemesan
                    </p>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Nama lengkap</p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Email</p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Sewa</p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $lapangan->name }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Tanggal Pemesanan</p>
                        <div class="ms-auto" style="font-size:14px">
                           {{ $tanggalSewa }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Jam Sewa</p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $jamSewa }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Lama Sewa</p>
                        <div class="ms-auto" style="font-size:14px">
                            {{ $lamaSewa }}
                        </div>
                    </div>

                    <p class="container fw-semibold mt-2 justify-content-center mb-0">Pembayaran</p>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Metode Pembayaran</p>
                        <div class="ms-auto" style="font-size:14px">
                            Transfer
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">No Rekening</p>
                        <div class="ms-auto" style="font-size:14px">
                            122333444
                        </div>
                    </div>
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Nama Bank</p>
                        <div class="ms-auto" style="font-size:14px">
                            BCA (a.n Sport Ease)
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="mb-0">
                        Total Pembayaran <br/>
                        <span style="color: #A9DA05; font-size: 18px" class="fw-semibold">Rp. {{ $lapangan->harga }} </span>
                    </p>
                    <button type="button" class="btn fw-semibold" style="background-color: #a8da05; color: #ffff" wire:click="simpanTransaksi" data-bs-dismiss="modal">
                        Bayar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
