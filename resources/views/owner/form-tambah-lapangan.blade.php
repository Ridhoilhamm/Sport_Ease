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
    <div    style=" padding-top: 20px; padding-bottom: 5px; background-color: #A9DA05">

        <p class=" container text-center" style="color:white">Tambah Lapangan</p>
    </div>
    <div class=" bg-white mt-2" style="padding-top: 2px">
        <div class="container mt-2 " >
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lapangan</label>
                            <input type="text" class="form-control" id="name" placeholder="David Johnson">
                        </div>
                        <div class="mb-3">
                            <label for="fieldType" class="form-label">Jenis Lapangan</label>
                            <select class="form-select" id="fieldType" >
                                <option value="futsal">Futsal</option>
                                <option value="basketball">Basketball</option>
                                <option value="tennis">Tennis</option>
                                <option value="badminton">Badminton</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Jumlah Lapangan</label>
                            <input type="number" class="form-control" id="dob" placeholder="jumlah lapangan" >
                        </div>
                        <div class="mb-3 justify-between" >
                             <label for="dob" class="form-label">Jam Penyewaan</label>
                            <div class="row">
                                <div class="col">
                                    <input type="time" class="form-control" id="jumlah1" placeholder="Mulai">
                                </div>
                                <div class="col">
                                    <input type="time" class="form-control" id="jumlah2" placeholder="Berakhir">
                                </div>
                            </div>
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