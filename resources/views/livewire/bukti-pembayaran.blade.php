<div>
    <div class="container">
        @if ($transaksiStatus === 'menunggu hari')
            <div class="text-center mt-4">
                <p class="text-gray-700">
                    Bukti pembayaran telah diunggah. Status transaksi: 
                    <strong>{{ $transaksiStatus }}</strong>.
                </p>
                @if ($buktiUrl)
                    <!-- Button to open modal -->
                    <button type="button" class="inline-block mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" 
                            data-bs-toggle="modal" data-bs-target="#buktiModal">
                        Lihat Bukti Pembayaran
                    </button>
                @endif
            </div>
        @else
            <div class="bg-white rounded shadow-sm p-4 mt-4">
                <form wire:submit.prevent="uploadBuktiPembayaran" class="space-y-4">
                    <!-- Label Upload -->
                    <label for="bukti_pembayaran" class="block text-sm font-medium text-gray-700">
                        Upload Bukti Pembayaran
                    </label>

                    <!-- Input File -->
                    <div class="flex items-center">
                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" 
                               class="hidden" wire:model="buktiPembayaran">
                        <label for="bukti_pembayaran" 
                               class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer hover:bg-blue-600">
                            <i class="fas fa-upload mr-2"></i> Pilih File
                        </label>

                        <!-- Display Selected File Name -->
                        <div class="ml-4 text-gray-700 text-sm">
                            @if ($buktiPembayaran)
                                <span>{{ $buktiPembayaran->getClientOriginalName() }}</span>
                            @else
                                <span>Belum ada file yang dipilih</span>
                            @endif
                        </div>
                    </div>

                    <!-- Error Message -->
                    @error('buktiPembayaran')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-md hover:bg-green-600">
                            Upload
                        </button>
                    </div>
                </form>
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
                <div class="mt-4 text-green-500 text-center">
                    {{ session('message') }}
                </div>
            @endif
        @endif
    </div>

    <!-- Modal to show uploaded proof -->
    <div class="modal fade" id="buktiModal" tabindex="-1" aria-labelledby="buktiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- If file is an image -->
                    @if (strpos($buktiUrl, '.jpg') !== false || strpos($buktiUrl, '.png') !== false)
                        <img src="{{ asset('storage/' . $buktiUrl) }}" alt="Bukti Pembayaran" class="w-100">
                    <!-- If file is a PDF -->
                    @elseif (strpos($buktiUrl, '.pdf') !== false)
                        <iframe src="{{ asset('storage/' . $buktiUrl) }}" width="100%" height="500px"></iframe>
                    @else
                        <p>Tidak ada file yang dapat ditampilkan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
