@extends('owner.layout')
@section('content')


<div>
    <!-- Header -->
    <div class="container d-flex align-items-center justify-content-between" style="background-color: #A9DA05; padding: 10px;">
        <!-- Tombol dengan Icon -->
        <a href="/owner/lapangan" class="btn btn-light rounded-circle p-2 shadow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 6l-6 6l6 6" />
            </svg>
        </a>
        <!-- Teks -->
        <p class="container text-center text-white mb-0 fs-5 fw-bold" style="flex-grow: 1;">Edit Data Lapangan</p>
    </div>
    

    <!-- Section Judul -->

    <!-- Form -->
    <div class="bg-white mt-2 py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Input Nama Lapangan -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lapangan</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $lapangan->name }}" required>
                        </div>

                        <!-- Input Harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $lapangan->harga }}" required>
                        </div>

                        <!-- Input Foto -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Lapangan</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>

                        <!-- Preview Foto -->
                        <div class="mb-3 text-center">
                            <img src="{{ asset('storage/'.$lapangan->foto) }}" alt="Foto Lapangan" class="img-fluid rounded shadow-sm" style="max-width: 200px;">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-center text-center">
                            <button type="submit" class="btn btn-success ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@php
    
    $hideSidebar=true;
@endphp