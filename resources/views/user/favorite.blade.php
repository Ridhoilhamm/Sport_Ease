@extends('user.layout')

@section('content')
    <div>
        <div class="container  fixed-top d-flex justify-items-center bg-white "
            style=" padding-top:10px; padding-bottom: 10px; ">
            <a href="/data-diri">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </a>
            <p class="container fw-semibold" style="color:rgba(0, 0, 0, 0.686)">Favorite Lapangan</p>
        </div>
        <div class="py-1" style="background-color: hsl(210, 17%, 93%);">

        </div>
        <div class="bg-white" style="padding-top: 50px;">
            <div class="container" style="padding-bottom:20px; padding-top:10px">
                @if ($notFound)
                <div class="bg-white mt-2" id="chat-animation" style="width: 100%; padding-bottom:22px;">
                    <div class="justify-content-center" style="padding-top: 20px">
                        <p class="text-center">Status Transaksi selesai tidak ada</p>
                    </div>
                    <script>
                        var chatAnimation = lottie.loadAnimation({
                            container: document.getElementById('chat-animation'),
                            renderer: 'svg',
                            loop: true,
                            autoplay: true,
                            path: '{{ asset('image/Animation - 1736749790291.json') }}'
                        });
                    </script>
                </div>
                @else
                    @foreach ($lapangansFavorit as $lapangan)
                        <div class="container rounded mt-2 border border-dark" style="; padding-bottom:10px">
                            <div class="custom-card mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('image/badminton.jpg') }}" style="height: 70px; width:70px;"
                                        alt="Lapangan" class="me-3 rounded">
                                    <div class="flex-grow-1">
                                        <div class="title">{{ $lapangan->name }}</div>
                                        <div class="d-flex align-items-center icon-text">
                                        </div>
                                        <div class="icon-text text-secondary">
                                            <i class="bi bi-geo-alt-fill me-1"></i> {{ $lapangan->lokasi_tempat }}
                                        </div>
                                    </div>
                                </div>
                                <form id="deleteFavoriteForm" action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-primary w-100 mt-2 rounded-pill fw-semibold"
                                        style="font-size: 12px" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                                        onclick="setDeleteAction('{{ route('hapus-favorite', $lapangan->id) }}')">
                                        Hapus dari Favorit
                                    </button>
                                </form>

                                <!-- Modal untuk Konfirmasi Hapus Favorit -->
                                <div class="modal fade" id="confirmDeleteModal" tabindex="-1"
                                    aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus lapangan ini dari favorit?
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Button untuk membatalkan aksi -->
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <!-- Button untuk mengonfirmasi aksi hapus -->
                                                <button type="button" class="btn btn-danger"
                                                    id="confirmDeleteBtn">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function setDeleteAction(url) {
                                        // Menyimpan URL hapus favorite pada form action
                                        document.getElementById('deleteFavoriteForm').action = url;
                                    }

                                    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
                                        // Submit form untuk menghapus favorite setelah konfirmasi
                                        document.getElementById('deleteFavoriteForm').submit();
                                    });
                                </script>

                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
        </div>




    </div>
    @php
        $hideNavbar = true;
        $hideFooter = true;
    @endphp
@endsection
