<x-filament-widgets::widget>
    <!-- Section untuk tombol tambah lapangan -->
    <x-filament::section>
        <div class="flex gap-8">
            <!-- Tombol untuk menambahkan Lapangan -->
            <a href="{{ url('admin/lapangans/create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Tambah Lapangan
            </a>

            <!-- Tombol untuk melihat Cart -->
            <a href="{{ url('admin/lapangans/create') }}"
                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                Lihat Keranjang
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
