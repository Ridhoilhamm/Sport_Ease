<div class="m-1">
    <footer class="fixed-bottom bg-white py-2 d-flex justify-content-around border-top">
        <!-- Menu Utama -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/user" class="{{ request()->is('user') ? 'text-success' : 'text-secondary' }}">
                <i class="fas fa-home fa-lg"></i>
            </a>
            <h6 class="m-0 {{ request()->is('user') ? 'fw-semibold' : 'fw-light' }}" style="font-size: 12px;">
                Utama
            </h6>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/artikel" class="{{ request()->is('artikel') ? 'text-success' : 'text-secondary' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-article">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                </svg>
            </a>
            <h6 class="m-0 {{ request()->is('artikel') ? 'fw-normal' : 'fw-light' }}" style="font-size: 12px;">
                Artikel
            </h6>
        </div>
        <!-- Menu Lapangan -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/kategory" class="{{ request()->is('kategory') ? 'text-success' : 'text-secondary' }}">
                <i class="fas fa-university fa-lg"></i>
            </a>
            <h6 class="m-0" style="font-size: 12px; font-weight: {{ request()->is('kategory') ? '330' : '300' }};">
                Lapangan
            </h6>
        </div>
        <!-- Menu History -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/riwayat" class="{{ request()->is('riwayat') ? 'text-success' : 'text-secondary' }}">
                <i class="fa-solid fa-wallet fa-lg"></i>
            </a>
            <p class="m-0" style="font-size: 12px;">Riwayat</p>
        </div>
        <!-- Menu Profil -->
        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/data-diri" class="{{ request()->is('data-diri') ? 'text-success' : 'text-secondary' }}">
                <i class="fas fa-user fa-lg"></i>
            </a>
            <p class="m-0" style="font-size: 12px;">Profil</p>
        </div>
    </footer>
</div>
