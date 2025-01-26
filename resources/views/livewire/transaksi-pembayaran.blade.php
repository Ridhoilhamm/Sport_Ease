<div>
   
    <div class="bg-white " style="fixed-bottom padding-top: 3px; padding-bottom:20px;">
        <div class="container d-flex align-items-center justify-content-between" style="padding-top: 10px; font-family: ubuntu;">
            <!-- Total Pembayaran dan Harga -->
            <div class="ms-2">
                <!-- Total Pembayaran -->
                <p class="fw-semibold mb-1 " style="font-size: 18px; color:#000000a6">
                    Total Pembayaran
                </p>
                <!-- Harga -->
                <p class="fw-bold mb-0 " style="font-size: 20px; color:#A9DA05;">
                    Rp.{{ number_format($lapangan->harga * 2+2000, 0, ',', '.') }}
                </p>
            </div>
            <!-- Tombol Lanjutkan -->
            <div class="me-1">

                <button class=" btn btn-success custom-button mt-3" data-bs-toggle="modal" data-bs-target="#detail-pembayaran"
                    style="background-color: #A9DA05; color: #ffffff; padding: 12px; border-radius: 8px; border: none; font-weight: bold;">
                    Lanjutkan
                </button>
            </div>

        </div>
    </div>
    
    

    <!-- Modal -->
    <div class="modal fade" id="detail-pembayaran" tabindex="-1" aria-labelledby="detaipembayaran" aria-hidden="true"
        style="font-family: ubuntu " data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-start" id="exampleModalLabel">Detail Pemesanan</h5>
                </div>
                <div class="modal-body">
                    <p class="container fw-semibold mb-0 justify-content-center">
                        Data Pemesan
                    </p>
                    
                    <div class="d-flex align-items-center container">
                        <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Tgl Pemesanan</p>
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
                   

                    <div class="container ">
                        <!-- Header -->
                        
                    
                        <!-- Metode Pembayaran -->
                        <!-- Nomor Rekening -->
                        <p class=" fw-semibold mt-2 mb-0 justify-content-center">
                            Motade Pemesanan
                        </p>
                        <div class="d-flex align-items-center mb-0">
                            <p class="fw-medium mb-0" style="font-size:14px;">Metode Pembayaran</p>
                            <div class="ms-auto" style="font-size:14px;">
                                Transfer
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-0">
                            <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Nama Bank</p>
                            <div class="ms-auto" style="font-size:14px;">
                                BCA
                            </div>
                        </div>
                    
                        <div class="d-flex align-items-center mb-0">
                            <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">No Rekening</p>
                            <div class="ms-auto d-flex align-items-center">
                                <p class="mb-0 me-2" style="font-size:14px;">122333444</p>
                                <svg id="copy-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-copy" style="cursor: pointer;">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                    <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                                </svg>
                            </div>
                        </div>
                    
                        <!-- Custom Alert -->
                        <div id="custom-alert" class="alert alert-success" style="display: none;">
                            <strong>Success!</strong> Nomor rekening berhasil disalin!
                        </div>
                    
                        <!-- Nama Bank -->
                        
                    
                        <!-- Atas Nama -->
                        <div class="d-flex align-items-center mb-3">
                            <p class="fw-medium mb-0" style="flex: 1; font-size:14px;">Atas Nama</p>
                            <div class="ms-auto" style="font-size:14px;">
                                Sport Ease
                            </div>
                        </div>
                    </div>
                    
                    <!-- Script untuk Menyalin Nomor Rekening -->
                    <script>
                        document.getElementById('copy-icon').addEventListener('click', function () {
                            // Salin nomor rekening ke clipboard
                            const textToCopy = '122333444'; // Nomor rekening
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
                    
                    <!-- Custom CSS -->
                    <style>
                        .alert {
                            position: fixed;
                            top: 140px;
                            left: 50%;
                            transform: translateX(-50%);
                            padding: 15px;
                            font-size: 14px;
                            border-radius: 5px;
                            background-color: #28a746a2;
                            color: white;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                            z-index: 1050;
                            transition: opacity 0.5s ease;
                        }
                    
                        .icon-success {
                            stroke: #28a745; /* Warna hijau setelah berhasil */
                        }
                    </style>
                    
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="mb-0">
                        Total Pembayaran <br />
                        <span style="color: #A9DA05; font-size: 18px" class="fw-semibold">
                            @if (is_numeric($lapangan->harga) && $lapangan->harga > 0)
                            Rp. {{ number_format((float)$lapangan->harga * 2+2000, 0, ',', '.') }}
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
