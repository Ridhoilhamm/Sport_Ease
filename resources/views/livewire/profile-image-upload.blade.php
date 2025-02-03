<div>
    <style>
        /* Gaya untuk gambar profil kecil */
        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #6c757d;
            cursor: pointer;
        }

        /* Gaya untuk menampilkan gambar besar */
        .lightbox-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Overlay transparan gelap */
            display: none; /* Sembunyikan overlay secara default */
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Pastikan berada di atas semua konten */
        }

        .lightbox-image {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px; /* Penambahan radius agar terlihat lebih halus */
        }
    </style>

    <!-- Gambar Profil Kecil -->
    <div class="text-center mb-1 position-relative">
        <div class="mb-1 d-flex justify-content-center">
            @if ($current_image)
                <img src="{{ asset('storage/' . $current_image) }}" alt="Profile Image" class="profile-pic" width="120" height="120" id="small-profile-image">
            @else
                <!-- Menampilkan SVG saat tidak ada gambar profile -->
                <div class="profile-pic" style="width: 120px; height: 120px; display: flex; justify-content: center; align-items: center;">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                </div>
            @endif
        </div>
        
    </div>

    
    <div class="lightbox-overlay " id="lightbox-overlay">
        <img id="large-profile-image" class="lightbox-image border border-light" src="" alt="Profile Image">
    </div>

    <script>
        // Menangani klik pada gambar kecil dan menampilkan gambar besar
        document.getElementById('small-profile-image').addEventListener('click', function() {
            var largeImageContainer = document.getElementById('lightbox-overlay');
            var largeProfileImage = document.getElementById('large-profile-image');

            // Set gambar besar dengan gambar yang sama
            largeProfileImage.src = this.src;

            // Menampilkan overlay dengan gambar besar
            largeImageContainer.style.display = 'flex';
        });

        // Menangani klik di luar gambar besar untuk menutup overlay
        document.getElementById('lightbox-overlay').addEventListener('click', function(event) {
            if (event.target === this) { // Jika yang diklik adalah area luar gambar
                this.style.display = 'none'; // Sembunyikan overlay
            }
        });
    </script>

    <!-- Tombol untuk Upload Foto -->
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
