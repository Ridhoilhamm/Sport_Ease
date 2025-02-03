<div class="m-1">
    <footer class="fixed-bottom bg-white py-2 d-flex justify-content-around border-top">
        <!-- Menu Utama -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/owner" class="{{ request()->is('owner') ? 'text-success' : 'text-secondary' }}">
                <i class="fas fa-home fa-lg"></i>
            </a>
            <h6 class="m-0 {{ request()->is('user') ? 'fw-semibold' : 'fw-light' }}" style="font-size: 12px;">
                Utama
            </h6>
        </div>
        <!-- Menu History -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="{{ route('owner-riwayat') }}"
                class="{{ request()->is('riwayat-owner') ? 'text-success' : 'text-secondary' }}">
                <i class="fa-solid fa-wallet fa-lg"></i>
            </a>
            <p class="m-0" style="font-size: 12px;">Riwayat</p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/profile/penjaga"
            class="{{ request()->is('profile/penjaga') ? 'text-success' : 'text-secondary' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                    <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                </svg>
            </a>
            <p class="m-0" style="font-size: 12px;">Profile</p>
        </div>
        <!-- Menu Profil -->
    </footer>
</div>
