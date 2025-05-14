@extends('user.layout')
@section('content')

<style>
    /* Menambahkan gambar sebagai latar belakang halaman */
    .bg-image {
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

<div style="background-image: url('{{ asset('image/bg-baru.jpg') }}'); background-size: cover; background-position: center;" class="p-6 md:p-10 rounded-xl">
   
    <div class="max-w-md mx-auto pt-2">
        <livewire:auth.registrasi />
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



