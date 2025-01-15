<div>
    <!-- Modal Content -->
    <div class="fixed-bottom mt-1 mb-0 container bg-white shadow-lg rounded-lg">
        <div class="mb-1 mt-0 me-2">
            <p class="text-muted small mb-2 mt-2">Tersedia: <strong>{{ $lapangan->jumlah_lapangan }}</strong></p>
            <button type="button" class="btn btn-success w-100" style="background-color:#5cb85c" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <p class="fw-semibold mb-0" style="color: #ffffff">Booking Lapangan</p>
            </button>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable container">
            <div class="modal-content container">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title text-center" id="bottomModalLabel">Pilih Tanggal Sewa</h5>
                </div>

                <div class="modal-body1" style="padding-bottom: 10px">
                    <form wire:submit.prevent="submit()">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="tanggalPickerDisplay" class="form-label">Tanggal Sewa</label>
                            <div class="input-group justify-content-center">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <input type="date" class="form-control w-50 bg-white" wire:model.defer="date" 
                                       placeholder="Pilih Tanggal" id="tanggalPicker" />
                            </div>
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <script>
                            // Set tanggal minimum untuk input date
                            const today = new Date().toISOString().split('T')[0];
                            document.getElementById('tanggalPicker').setAttribute('min', today);
                        </script>
                        

                        <div class="mb-3">
                            <label name="jam_sewa" for="jam_sewa" class="form-label">Jam Sewa</label>
                            <div class="d-flex flex-wrap gap-0">
                                @foreach ($times as $time)
                                    <button type="button"
                                        class="btn {{ array_search($time, $get_time) !== false ? 'btn-success selected' : 'btn-outline-success' }} btn-sm"
                                        wire:click="choiceTime('{{ $time }}')">
                                        {{ $time }}
                                    </button>
                                @endforeach
                            </div>
                            @error('get_time')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       

                        <div class="mb-3">
                            <label for="lama_sewa" class="form-label">Lama Sewa (Jam)</label>
                            <input type="number" min="1" class="form-control w-50" id="lama_sewa"
                                wire:model.defer="lama_sewa" placeholder="Masukkan lama sewa">
                            @error('lama_sewa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="btn w-100 " style="background-color: #5cb85c; color:#ffffff" type="submit">
                            Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
