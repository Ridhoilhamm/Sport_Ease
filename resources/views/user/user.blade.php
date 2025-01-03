@extends('user.layout')

@section('styles')
    <style>
        .splide-btn {
            background-color: #f8f9fa;
            border: none;
            padding: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 50%;
        }

        .splide-btn:hover {
            background-color: #e9ecef;
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        .splide-btn-left {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }

        .splide-btn-right {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        /* Track dan Slide */
        .splide-track-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .splide-slide-list {
            display: flex;
            gap: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .splide-slide-item {
            flex: 0 0 auto;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .splide-slide-image {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        a {
    text-decoration: none;
    color: inherit;
}
    </style>
@endsection

{{-- <img src="{{ asset('image/download.jpeg') }}" alt="" style="height:100px; width:150px;" --}}
{{-- style="background-color: #2A2A2A; padding:45px;"> --}}
@section('content')
<div>
    <section>
        <div class="body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="profile-card">
                <div class="profile-header"></div>

                <img src="{{ asset('storage/' . ($image ?? 'images/profiles/barber1.png')) }}" alt="Profile Picture" class="profile-image">

                <div class="edit-icon mt-5" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <i class="bi bi-pencil-square emas fw-bold fs-10"></i>
                </div>

                <h2>{{ $name }}</h2>
                <p>{{ $email }}</p>

                <div class="nav_card py-4 warna mx-2 rounded">
                    <div class="mt-1 py-2 px-3 rounded d-flex align-items-center mx-2 edit-profile"
                        data-bs-toggle="modal" data-bs-target="#editProfileModal">
                        <i class="bi bi-pencil-square emas fw-bold fs-5"></i>
                        <h1 class="fs-7 text-white mx-3 pt-2">Edit Profile</h1>
                        <i class="fa-solid fa-chevron-right ms-auto chevron-right"></i>
                    </div>

                    <div class="mt-1 py-2 px-3 rounded d-flex align-items-center mx-2 edit-profile"
                        data-bs-toggle="modal" data-bs-target="#editPasswordModal">
                        <i class="fa-solid fa-unlock-keyhole emas fw-bold fs-5"></i>
                        <h1 class="fs-7 text-white mx-3 pt-2">Ubah Password</h1>
                        <i class="fa-solid fa-chevron-right ms-auto chevron-right"></i>
                    </div>

                    <a href="mailto:indra@gmail.com?subject=Hubungi%20Kami&body=Halo,%20saya%20ingin%20menghubungi%20Anda"
                        class="text-decoration-none">
                        <div class="mt-1 py-2 px-3 rounded d-flex align-items-center mx-2 edit-profile">
                            <i class="fa-solid fa-square-phone emas fw-bold fs-5"></i>
                            <h1 class="fs-7 text-white mx-3 pt-2">Hubungi Kami</h1>
                            <i class="fa-solid fa-chevron-right ms-auto chevron-right emas"></i>
                        </div>
                    </a>

                    <div class="mt-1 py-2 px-3 rounded d-flex align-items-center mx-2 edit-profile"
                        onclick="confirmLogout()">
                        <i class="bi bi-arrow-right-square-fill text-danger fw-bold fs-5"></i>
                        <h1 class="fs-7 text-danger mx-3 pt-2">Logout</h1>
                        <i class="fa-solid fa-chevron-right ms-auto chevron-right text-danger"></i>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <div wire:ignore.self class="modal fade align-items-center" id="editProfileModal" tabindex="-1"
        aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title emas" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateProfile">
                        <div class="mb-3">
                            <label for="name" class="form-label emas">Nama</label>
                            <input type="text" class="form-control bg-modal" id="name"
                                placeholder="Masukkan Nama" wire:model.defer="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label emas">Email</label>
                            <input type="email" class="form-control bg-modal" id="email"
                                placeholder="Masukkan Email" wire:model.defer="email">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label emas">Foto</label>
                            <input type="file" class="form-control bg-modal" id="photo" wire:model="imageUpload">
                            @if ($imageUpload)
                                <div class="mt-2">
                                    <p class="text-success">Gambar berhasil dipilih:
                                        <strong>{{ $imageUpload->getClientOriginalName() }}</strong>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="kuning text-white rounded py-1 px-3 border border-warning"
                        wire:click="updateProfile">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editPasswordModal" tabindex="-1"
        aria-labelledby="editPasswordModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title emas" id="editPasswordModalLabel">Edit Password</h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updatePassword">
                        <div class="mb-3">
                            <label for="password" class="form-label emas">Password Lama</label>
                            <input type="password" class="form-control bg-modal" id="password"
                                placeholder="Masukkan Password Lama" wire:model.defer="password">
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label emas">Password Baru</label>
                            <input type="password" class="form-control bg-modal" id="new_password"
                                placeholder="Masukkan Password Baru" wire:model.defer="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label emas">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control bg-modal" id="confirm_password"
                                placeholder="Masukkan kembali Password Baru" wire:model.defer="confirm_password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="kuning text-white rounded py-1 px-3 border border-warning"
                        wire:click="updatePassword">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
