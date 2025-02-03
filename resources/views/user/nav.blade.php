<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

    <style>
    
        .navbar-link {
            display: inline-block; /* Membatasi pengaruh elemen <a> */
            position: relative; /* Agar tidak mengganggu elemen lainnya */
            text-decoration: none; /* Menghilangkan garis bawah pada <a> */
        }
    
        .navbar-link img {
            vertical-align: middle; /* Mengatur posisi gambar agar tidak mengganggu layout */
        }
    
        .navbar-link h5, .navbar-link p {
            margin-bottom: 0; /* Mengatur margin agar tidak ada ruang ekstra */
        }
    
        </style>
    <div class="bg-white fixed-top p-2">

        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center ms-1">
                <!-- Foto Profil atau Foto Dummy -->
                <a href="/data-diri" class="navbar-link">
                    <img 
                        src="{{ auth()->check() && auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : 'data:image/svg+xml;utf8,<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>' }}"
                        style="height: 40px; width:39px; border:2px solid #ddd0d0;" class="rounded-circle me-2 pad" alt="Profile">
                </a>
                
                <div>
                    <p class="m-0" style="font-size: 12px">Halo,</p>
                    <!-- Nama User atau Guest -->
                    <h5 class="m-0 fw-semi-bold" style="font-size: 15px;">
                        {{ auth()->check() ? auth()->user()->name : 'Pengunjung' }}
                    </h5>
                </div>
            </div>
            
            <div class="d-flex align-items-center py-2 me-1">
                <img src="{{ asset('image/logo.png') }}" style="height:40px; width:40px;" alt="Logo">
            </div>
        </div>
        

    </div>

   
</nav>
