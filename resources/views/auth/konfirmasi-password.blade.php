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
        align-items: center;
    }

    .password-container {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: gray;
    }
</style>

<div>
    <div class="bg-image d-flex align-items-center mt-0">
        <div class="container card-custom bg-white shadow text-center ms-2 me-2 rounded" 
             style="padding-bottom:10px; padding-top:10px;">
            <h1 class="text-center mb-4">Reset Password</h1>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('image/lock.jpeg') }}" alt="gambar-reset" 
                     style="width: 100%; height: 150px; object-fit: contain;">
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops! Ada beberapa kesalahan:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $item)
                            <li>{{ str_replace(['The email field is required.'], ['Harap masukkan email Anda.'], $item) }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="text-center">
                <form action="{{ route('password.update') }}" method="POST" class="p-3">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-2">
                        <input type="email" name="email" class="form-control rounded" 
                               value="{{ old('email') }}" placeholder="Masukkan email" required>
                        @error('email')
                            <small class="text-danger">Harap mengisi email dengan benar</small>
                        @enderror
                    </div>

                    <div class="mb-2 password-container">
                        <input type="password" id="password" name="password" class="form-control rounded" 
                               placeholder="Password Baru" required>
                        <i class="bi bi-eye-slash toggle-password" id="togglePassword"></i>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-2 password-container">
                        <input type="password" id="confirmPassword" name="password_confirmation" 
                               class="form-control rounded" placeholder="Konfirmasi Password" required>
                        <i class="bi bi-eye-slash toggle-password" id="toggleConfirmPassword"></i>
                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary mt-2 w-100 rounded-pill">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        function togglePasswordVisibility(inputId, iconId) {
            const inputField = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);

            toggleIcon.addEventListener("click", function () {
                // Toggle tipe input antara password dan text
                const type = inputField.type === "password" ? "text" : "password";
                inputField.type = type;

                // Ganti ikon
                toggleIcon.classList.toggle("bi-eye-slash");
                toggleIcon.classList.toggle("bi-eye");
            });
        }

        togglePasswordVisibility("password", "togglePassword");
        togglePasswordVisibility("confirmPassword", "toggleConfirmPassword");
    });
</script>

@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
