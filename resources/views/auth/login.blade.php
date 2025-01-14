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
        flex-direction: column;
        justify-content: flex-end;
    }

    .custom-rounded {
        border-top-left-radius: 50px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .customm-rounded {
        border-top-left-radius: 20px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .btnn {
        border-top-left-radius: 10px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .container {
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .hallo {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100px;
        padding-right: 20px;
    }
</style>

<div>
    <!-- Jarak antara "hallo" dan form login -->
    <div class="bg-image d-flex align-items-center mt-0">
        <div class="customm-rounded bg-white d-flex justify-content-center align-items-center mb-4" style="width: 50%; height: 100px;">
            <img src="{{ asset('image/logo.png') }}" alt="" style="width: auto; height: 50px; object-fit: contain;">
        </div>

        <div class="border custom-rounded px-3 py-3 ms-3 bg-white shadow" style="width: 100%; height:75%; max-width: 450px; padding-right: 20px;">
            <h1 class="text-center mb-4">Login</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" value="{{ old('password') }}" name="password" class="form-control">
                        <button type="button rounded" class="btn  btn-outline-secondary" id="togglePassword">
                            <i id="eyeIcon" class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="custom-card mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // JavaScript untuk men-toggle password
    const togglePassword = document.getElementById("togglePassword");
    const passwordField = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    togglePassword.addEventListener("click", function () {
        // Toggle tipe input antara password dan text
        const type = passwordField.type === "password" ? "text" : "password";
        passwordField.type = type;

        // Ganti ikon sesuai tipe password
        eyeIcon.classList.toggle("bi-eye-slash");
        eyeIcon.classList.toggle("bi-eye");
    });
</script>

@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp



