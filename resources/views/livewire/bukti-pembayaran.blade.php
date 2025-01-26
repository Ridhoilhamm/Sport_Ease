{{-- <style>
   
    .modal-dialog.custom-modal {
        max-width: 300px; 
        margin: auto; 
    }
    .modal-body {
        font-size: 14px; 
        padding: 10px;   
    }

    
    .modal-body img {
        max-width: 100%; 
        height: auto;    
    }

    .modal-body iframe {
        width: 100%;
        height: 250px; 
    }
</style> --}}

<div >
    <style>
        /* Membatasi ukuran modal */
        .custom-modal-size {
            max-width: 400px; /* Lebar maksimum modal */
            margin: auto;
        }
    
        /* Bagian modal header (atas) */
        .modal-header {
            
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }
    
        /* Bagian modal footer (bawah) */
        .modal-footer { 
            background-color: #f8f9fa;
            /* border-top: 1px solid #dee2e6; */
        }
    
        /* Membuat bagian konten scrollable (tengah) */
        .modal-body {
            max-height: 300px; /* Tinggi maksimum area scroll */
            overflow-y: auto;  Scrollable jika konten melebihi batas
        }
    </style>

    <div >
        <div class="">
            @if ($transaksiStatus === 'menunggu hari')
                <div class="text-center  bg-white rounded px-2" style="padding-top: 10px">
                    <p class="text-gray-700">
                        Bukti pembayaran telah diunggah. Status transaksi: 
                        <strong>{{ $transaksiStatus }}</strong>.
                    </p> 
                    @if ($buktiUrl)
                        <!-- Button to open modal -->
                        <button type="button" class=" btn btn-success inline-block mt-2 mb-2 px-4 py-2 " 
                                data-bs-toggle="modal" data-bs-target="#buktiModal">
                            Lihat Bukti Pembayaran
                        </button>
                    @endif
                </div>
            @else    
                <div class="bg-white rounded shadow-sm p-4 mt-2">
                    <form wire:submit.prevent="uploadBuktiPembayaran" class="space-y-4">
                     
                        <label for="bukti_pembayaran" class="block text-sm font-medium text-gray-700">
                            Upload Bukti Pembayaran
                        </label>
    
                       
                        <div class="flex items-center">
                            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" 
                                   class="hidden" wire:model="buktiPembayaran">
                            <label for="bukti_pembayaran" 
                                   class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer hover:bg-blue-600">
                                <i class="fas fa-upload mr-2"></i> Pilih File
                            </label>
    
                           
                            <div class="ml-4 text-gray-700 text-sm">
                                @if ($buktiPembayaran)
                                    <span>{{ $buktiPembayaran->getClientOriginalName() }}</span>
                                @else
                               
                                    <span>Belum ada file yang dipilih</span>
                                @endif
                            </div>
                        </div>
                        @error('buktiPembayaran')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-md hover:bg-green-600">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
                @if (session()->has('message'))
                    <div class="mt-4 text-green-500 text-center">
                        {{ session('message') }}
                    </div>
                @endif
            @endif
        </div>
    
        <div class="modal fade" id="buktiModal" tabindex="-1" aria-labelledby="buktiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content custom-modal-size">
                    
                    <!-- Header tetap -->
                    <div class="modal-header justify-content-center">
                        <h5 class="modal-title" id="buktiModalLabel">Bukti Pembayaran</h5>
                    </div>
                    
                    <div class="modal-footer">
                        <p></p>
                    </div>
                    
                    <!-- Konten scrollable -->
                    <div class="modal-body">
                        @if (strpos($buktiUrl, '.jpg') !== false || strpos($buktiUrl, '.png') !== false)
                            <!-- Bungkus gambar dalam div dengan kelas khusus -->
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $buktiUrl) }}" alt="Bukti Pembayaran" class="img-fluid">
                            </div>
                        @elseif (strpos($buktiUrl, '.pdf') !== false)
                            <iframe src="{{ asset('storage/' . $buktiUrl) }}" class="w-100" style="height: 200px; border: none;"></iframe>
                        @else
                            <p>Tidak ada file yang dapat ditampilkan.</p>
                        @endif
                    </div>
                    
                    <!-- Footer tetap -->
                    <div class="modal-footer">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
</div>