@extends('owner.layout')

@section('content')
<!-- Konten lainnya di sini -->

<div style="padding-top: 50px;">
    <!-- Modal untuk pemberitahuan "Siapkan Lapangan" -->
    <div class="modal fade" id="modalSiapkanLapangan" tabindex="-1" aria-labelledby="modalSiapkanLapanganLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSiapkanLapanganLabel">Pemberitahuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Siapkan lapangan sekarang!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script>
    // Periksa apakah ada transaksi baru dengan status 'menunggu hari' dan role pengguna adalah penjaga lapangan
    @if($transaksi && $transaksi->status === 'menunggu hari' && $userRole === 'user')
        $(document).ready(function() {
            $('#modalSiapkanLapangan').modal('show');
        });
    @endif
</script>
@endsection
