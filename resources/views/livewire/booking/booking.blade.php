
    <div>

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

                    {{-- <div class="input-group justify-content-center">
                <span class="input-group-text bg-light">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                    <div  name="tanggal_sewa" id="tanggalPickerDisplay" class="form-control w-50 bg-white" style="cursor: pointer;">
                        Pilih Tanggal
                    </div>
                </div> --}}
                    <div class="modal-body1">
                        <form wire:submit.prevent="submit()">

                            <div class="mb-3">
                                <label name="tanggal_sewa" for="tanggalPickerDisplay" class="form-label">Tanggal
                                    Sewa</label>
                                <div class="input-group justify-content-center">
                                    <span class="input-group-text bg-light">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    {{-- <div name="tanggal_sewa" id="tanggalPickerDisplay" class="form-control w-50 bg-white"
                                style="cursor: pointer;">
                                Pilih Tanggal
                            </div> --}}
                                    <div id="tanggalPickerDisplay" class="form-control w-50 bg-white"
                                        style="cursor: pointer;"  wire:model.defer="date">
                            pilih Tanggal

                                    </div>
                                </div>
                                @error('date')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label id="durasi" class="form-label">Durasi Sewa</label>
                                <label name="jam_sewa" for="jam_sewa" class="form-label">Jam Sewa</label>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($times as $time)
                                        <button 
                                            type="button" 
                                            class="btn {{ $get_time == $time ? 'btn-success' : 'btn-outline-success' }} btn-sm"
                                            wire:click="get_time = '{{ $time }}'" {{-- Set langsung nilai $get_time --}}
                                            style="transition: background-color 0.3s ease;"
                                        >
                                            {{ $time }}
                                        </button>
                                    @endforeach
                                </div>
                                @error('get_time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            

                            <button class="btn" style="background-color: #5cb85c; color:#ffffff" type="submit">
                                Lanjutkan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                    </div>
                </div>
            </div>

        </div>
    </div>

