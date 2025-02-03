@extends('user.layout')
@section('content')

    <style>
        /* Menambahkan gambar sebagai latar belakang halaman */
        .bg-image {
            background-image: url('{{ asset('image/bg.jpg') }}');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            /* Posisi horizontal center */
            align-items: center;
            /* Posisi vertical center */
        }

        .custom-rounded {
            border-top-left-radius: 50px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>

    <div class="bg-image">
        <div class="container card-custom bg-white shadow text-center ms-4 me-4 rounded"
            style="padding-bottom:10px;; padding-top:10px;">


            <h1 class="text-center mb-4 fw-semibold" style="font-size:16px">Lupa Kata Sandi</h1>
            <div class="d-flex justify-content-center">

                <img src="{{ asset('image/Reset Password.jpeg') }}" alt="gambar-reset" style="width: 150px; height:150px">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <a href="https://mail.google.com/" style="color:#A9DA05">

                        Buka Gmail
                    </a>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center">
                <form action="{{ route('password-email') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control rounded mb-3" placeholder="Masukkan email"
                        required>
                    <button name="submit" type="submit" class="btn btn-primary w-100">Minta Link Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
