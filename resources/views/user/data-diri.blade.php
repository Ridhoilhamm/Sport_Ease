@extends('user.layout')

@section('styles')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #6c757d;
        }

        .icon {
            font-size: 20px;
            margin-right: 2px;
        }

        .list-group-item {
            cursor: pointer;
        }

        .stat-card {
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 10px 0;
        }

        .stat-card h5 {
            margin: 0;
            font-size: 14px;
        }

        .stat-card p {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div>

        <body>
            <div class="">
                <a href="/user">
                    <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle p-2 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                </a>
                <div class="card shadow p-4 rounded-4 mx-auto" style="max-width: 400px;">
                    <!-- Profile Picture & Info -->
                    <div class="text-center mb-3">
                        <img src="{{ asset('image/Perfil.png') }}" alt="Profile Picture" class="profile-pic mb-2">
                        <h4 class="fw-bold mb-0">Ridho Ilham</h4>
                        <p class="text-secondary">Surabaya, JawaTimur</p>
                    </div>

                    <!-- Stats -->
                    <div class="row text-center mb-4">
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Favorit</h5>
                                <p>5</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Orders</h5>
                                <p>10</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <h5>Point</h5>
                                <p>10</p>
                            </div>
                        </div>
                    </div>

                    <!-- Menu List -->
                </div>
            </div>
            <div class="bg-white mt-2" style="padding-bottom: 50px">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        {{-- type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" --}}
                        <p class="mb-0 text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Informasi Pribadi</p>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Pesanan Kamu</p>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                              </svg> 
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Favorite Lapangan</p>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                <path d="M3 10l18 0" />
                                <path d="M7 15l.01 0" />
                                <path d="M11 15l2 0" />
                              </svg> 
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Pembayaran</p>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                              </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Keamanan</p>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-start gap-3 ms-2 mb-2">
                        <!-- Ikon -->
                        <span class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M9 12h12l-3 -3" />
                                <path d="M18 15l3 -3" />
                            </svg>
                        </span>
                        <!-- Teks -->
                        <p class="mb-0 text-center ms-1">Logout</p>
                    </li>
                </ul>
            </div>
    </div>

    <div>
        {{-- modal --}}
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Informasi Pribadi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Checklist Name -->
                        <div class="mb-3">
                            <label for="checklistName" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="checklistName" placeholder="Enter checklist name">
                        </div>
                        <div class="mb-3">
                            <label for="checklistName" class="form-label">Email Pengguna</label>
                            <input type="text" class="form-control" id="checklistName" placeholder="Email Pengguna">
                        </div>


                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Alamat Pengguna <span class="text-muted">(Optional)</span></label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Alamat Pengguna"></textarea>
                        </div>

                        <!-- Equipment Type -->
                        <div class="mb-3">
                            <label for="equipmentType" class="form-label">Equipment Type</label>
                            <select class="form-select" id="equipmentType">
                                <option selected>Capsule Filling Machine</option>
                                <option>Tablet Press Machine</option>
                                <option>Coating Machine</option>
                            </select>
                        </div>

                    
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection

@php
    $hideNavbar = true;

@endphp
