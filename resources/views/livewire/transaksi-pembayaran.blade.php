<div>
   
   

    <div class=" bg-white" style="padding-top: 3px; padding-bottom:20px;">
        <div class="container text-center d-flex justify-items-center" style="padding-top: 10px; font-family: ubuntu">
            <p class="fw-bold" style="font-size: 18px; color:#A9DA05">
                @if ($lamaSewa && $lapangan->harga)
                    Rp. {{ number_format($lapangan->harga * $lamaSewa, 0, ',', '.') }}
                @else
                    Harga atau lama sewa tidak tersedia.
                @endif
            </p>
            <button class="ms-auto btn btn-success custom-button" data-bs-toggle="modal"
                data-bs-target="#detail-pembayaran"
                style="background-color: #A9DA05; color: #ffffff; padding: 12px; border-radius: 8px; border: none; font-weight: bold;">
                Lanjutkan
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detail-pembayaran" tabindex="-1" aria-labelledby="detaipembayaran" aria-hidden="true"
        style="font-family: ubuntu " data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-start" id="exampleModalLabel">Detail Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="container fw-semibold mb-0 justify-content-center">
                        Data Pemesan
                    </p>
                    {{-- <div class="d-flex align-items-center container">
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
                    </div> --}}
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Sewa</p>
                        {{-- <div class="ms-auto" style="font-size:14px">
                            {{ $lapangan->name }}
                        </div> --}}
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
                        <p class="fw-medium mb-1" style="flex: 1; font-size:14px;">No Rekening</p>
                        <div class="ms-auto d-flex justify-between" style="font-size:14px">
                            
                            <svg id="copy-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path
                                    d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                            </svg>
                            <p>
                                122333444
                            </p>
                        </div>
                    </div>


                    <!-- Custom Alert -->
                    <div id="custom-alert" class="alert alert-success" style="display: none;">
                        <strong>Success!</strong> Nomor rekening berhasil disalin!
                    </div>

                    <!-- Script untuk Menyalin Nomor dan Menampilkan Custom Alert -->
                    <script>
                        document.getElementById('copy-icon').addEventListener('click', function() {
                            // Salin nomor rekening ke clipboard
                            const textToCopy = '122333444'; // Ganti dengan nomor rekening yang sesuai
                            navigator.clipboard.writeText(textToCopy)
                                .then(() => {
                                    // Tampilkan alert setelah berhasil menyalin
                                    const alert = document.createElement('div');
                                    alert.className = 'alert';
                                    alert.textContent = 'Nomor rekening berhasil disalin!';
                                    document.body.appendChild(alert);

                                    // Ganti warna ikon menjadi hijau
                                    document.getElementById('copy-icon').classList.add('icon-success');

                                    // Hapus alert setelah beberapa detik
                                    setTimeout(() => {
                                        alert.remove();
                                    }, 3000);
                                })
                                .catch(() => {
                                    alert('Gagal menyalin nomor rekening');
                                });
                        });
                    </script>

                    <!-- Custom CSS untuk Alert -->
                    <style>
                        .alert {
                            position: fixed;
                            top: 20px;
                            left: 50%;
                            transform: translateX(-50%);
                            padding: 15px;
                            font-size: 14px;
                            border-radius: 5px;
                            background-color: #28a745;
                            color: white;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                            z-index: 1050;
                            transition: opacity 0.5s ease;
                        }

                        .icon-success {

                            /* Hijau setelah berhasil */
                            stroke: #28a745;
                        }
                    </style>

                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Nama Bank</p>
                        <div class="ms-auto" style="font-size:14px">
                            BCA (a.n Sport Ease)
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="mb-0">
                        Total Pembayaran <br />
                        <span style="color: #A9DA05; font-size: 18px" class="fw-semibold">
                            @if ($lamaSewa && $lapangan->harga)
                                Rp. {{ number_format($lapangan->harga * $lamaSewa, 0, ',', '.') }}
                            @else
                                Harga atau lama sewa tidak tersedia.
                            @endif
                        </span>
                    </p>
                    <button type="button" class="btn fw-semibold" style="background-color: #a8da05; color: #ffff"
                        wire:click="simpanTransaksi" data-bs-dismiss="modal">
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
