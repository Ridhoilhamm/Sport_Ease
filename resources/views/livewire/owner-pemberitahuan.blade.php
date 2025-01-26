<div>
    <!-- Konten lainnya -->

    <!-- Modal untuk Menunggu Persiapan Lapangan -->
    <div x-data="{ open: @entangle('showModal') }" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold mb-4">Siapkan Lapangan</h2>
            <p>Silakan siapkan lapangan untuk transaksi yang baru saja diproses.</p>
            <div class="mt-4">
                <button @click="open = false" class="px-4 py-2 bg-red-600 text-white rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Konten lainnya -->
</div>

