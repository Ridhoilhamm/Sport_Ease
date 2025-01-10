@extends('owner.layout')

@section('content')
<div>
    <div id="header" class="position-fixed w-100 top-0 start-0 bg-transparent transition-all">
        <div class="d-flex justify-content-between align-items-center p-2">
            <!-- Tombol Kembali -->
            <a href="/owner/lapangan" class="btn btn-light rounded-circle p-2 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
            </a>
        </div>
    </div>
    <div style="padding-top: 20px; padding-bottom: 5px; background-color: #A9DA05">
        <p class="container text-center" style="color:white">Tambah Lapangan</p>
    </div>
    <div class="bg-white mt-2" style="padding-top: 2px">
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('simpanlapangan-owner') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Lapangan -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lapangan</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lapangan">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Jenis Lapangan -->
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Lapangan</label>
                            <select name="jenis" class="form-select @error('jenis') is-invalid @enderror" id="jenis">
                                <option value="">Pilih Jenis Lapangan</option>
                                <option value="futsal">Futsal</option>
                                <option value="basketball">Basketball</option>
                                <option value="tennis">Tennis</option>
                                <option value="badminton">Badminton</option>
                            </select>
                            @error('jenis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jumlah Lapangan -->
                        <div class="mb-3">
                            <label for="jumlah_lapangan" class="form-label">Jumlah Lapangan</label>
                            <input type="number" name="jumlah_lapangan" class="form-control @error('jumlah_lapangan') is-invalid @enderror" id="jumlah_lapangan" placeholder="Jumlah Lapangan">
                            @error('jumlah_lapangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto">
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="urls" class="form-label">Detail Lapangan</label>
                            <input type="file" name="urls[]" class="form-control @error('urls') is-invalid @enderror" id="urls" multiple>
                            @error('urls')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Lokasi Tempat -->
                        <div class="mb-3">
                            <label for="lokasi_tempat" class="form-label">Lokasi Tempat</label>
                            <input type="text" name="lokasi_tempat" class="form-control @error('lokasi_tempat') is-invalid @enderror" id="lokasi_tempat" placeholder="Lokasi Tempat">
                            @error('lokasi_tempat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga">
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Fasilitas -->
                        <div class="mb-3">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <textarea name="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" rows="3" placeholder="Fasilitas"></textarea>
                            @error('fasilitas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Simpan Lapangan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
    $hideSidebar = true;
@endphp
