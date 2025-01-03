<div class="m-1">
  <footer class="fixed-bottom bg-white py-2 d-flex justify-content-around border-top">
      <!-- Menu Utama -->
      <div class="d-flex flex-column align-items-center justify-content-center">
          <a href="/owner" class="{{ request()->is('owner') ? 'text-success' : 'text-secondary' }}">
              <i class="fas fa-home fa-lg"></i>
          </a>
          <h6 class="m-0 {{ request()->is('user') ? 'fw-semibold' : 'fw-light' }}" style="font-size: 12px;">
              Dasboard
          </h6>
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center">
        <a href="{{ route('owner.lapangan') }}" class="{{ request()->is('owner/lapangan') ? 'text-success' : 'text-secondary' }}">
              <i class="fas fa-university fa-lg"></i>
          </a>
          <h6 class="m-0" style="font-size: 12px; font-weight: {{ request()->is('lapangan') ? '330' : '300' }};">
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
  </footer>
</div>
