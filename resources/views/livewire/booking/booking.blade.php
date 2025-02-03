@php
    use Carbon\Carbon;
@endphp
<div>
    <!-- Modal Content -->
    <div class="fixed-bottom mt-1 mb-0 container bg-white shadow-lg rounded-lg">
        <div class="mb-1 mt-0 me-2">
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
                            <div class="text-danger">Anda Belum memasukkan tanggal</div>
                        @enderror
                    </div>
                    
                    <script>
                        const today = new Date().toISOString().split('T')[0];
                        document.getElementById('tanggalPicker').setAttribute('min', today);
                    </script>
                    
                    <div class="mb-3">
                        <label name="jam_sewa" for="jam_sewa" class="form-label">Jam Sewa</label>
                        <div class="d-flex flex-wrap gap-2 justify-content-center" style="gap: 10px;">
                            @foreach ($times as $time)
                                @php
                                    // Apakah tanggal dipilih adalah hari ini?
                                    $isToday = $date ? Carbon::parse($date)->isToday() : false;
                    
                                    // Ambil jam awal dari slot waktu
                                    $startTime = substr($time, 0, 5); 
                    
                                    // Validasi apakah waktu sudah lewat jika tanggal adalah hari ini
                                    $isInvalid = $isToday && $startTime <= Carbon::now()->format('H:i');
                                @endphp
                    
                                <button type="button"
                                    class="btn {{ in_array($time, $get_time) ? 'btn-success selected' : 'btn-outline-success' }} btn-sm"
                                    wire:click="choiceTime('{{ $time }}')"
                                    {{ $isInvalid ? 'disabled' : '' }}>
                                    {{ $time }}
                                </button>
                            @endforeach
                        </div>
                        @error('get_time')
                            <div class="text-danger">Anda Belum Memasukkan Jam Sewa</div>
                        @enderror
                    </div>
                    
                    
                    <script>
                        function selectOnlyOne(button) {
                            const buttons = document.querySelectorAll('.btn-sm');
                            buttons.forEach(btn => {
                                btn.classList.remove('btn-success', 'selected');
                            });
                            button.classList.add('btn-success', 'selected');
                        }
                    </script>
                    

                    <!-- Tombol Lanjutkan -->
                    <div class="d-flex justify-content-center">
                        <button class="btn w-100" style="background-color: #5cb85c; color:#ffffff;" type="submit">
                            Lanjutkan
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</div>
