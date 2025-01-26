<div>
    <style>
        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #6c757d;
        }
    </style>
    <div class="text-center mb-1 position-relative">
        <div class="mb-1">
            @if ($current_image)
                <img src="{{ asset('storage/' . $current_image) }}" alt="Profile Image" class="profile-pic" width="120"
                    height="120">
            @else
                <img src="{{ asset('default-profile.png') }}" alt="Default Profile" class="profile-pic" width="120"
                    height="120">
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#uploadModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-camera">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
            </svg>
        </button>
    </div>
    <!-- Modal untuk Upload Foto -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Foto Profil</h5>
                </div>
                <div class="modal-body">
                    <!-- Form Input Foto -->
                    <form method="POST" enctype="multipart/form-data">
                        <input type="file" wire:model="profile_image" class="form-control mb-3">
                        @error('profile_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="save" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
