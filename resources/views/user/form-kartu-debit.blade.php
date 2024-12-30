@extends('user.layout')

@section('content')
    <div >
        <div class="bg-white">

            <div class=" container d-flex border-bottom justify-align-items" style="padding-top: 15px">
                <a href="/data-diri">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left" class="ms-auto">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
                
            </a>
            <p class=" ms-1 fw-semibold">Tambah Kartu Debit / Kredit</p>
            
        </div>
        <div class="bg-white mt-2">
            <div class="items-center container">

                <p class="ms-4 mb-0">Tambahkan Kartu Debit Mandiri</p>
                <p class=" ms-4 text-secondary" style="font-size: 13px"> saat ini kamu hanya dapat menghubungkan kartu debit Mandiri</p>
            </div>
            <div class="container" style="padding-bottom:400px">
                <form>
                    <div class="mb-3 ms-4">
                        <label for="nomerKartu" class="form-label">Nomer Kartu</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="nomerKartu" 
                            placeholder="1234 5678 9012 4567" 
                        />
                        <label for="nomerKartu" class="form-label mt-3">Masa Berlaku</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="nomerKartu" 
                            placeholder="MM / YY" 
                        />
                    </div>
                </form>
            </div>
            <div class="bg-white fixed-bottom" >
                <div class="container mb-4 ">

                    <button type="button" class="btn btn-success w-100 rounded-pill">Tambah Kartu Baru</button>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
