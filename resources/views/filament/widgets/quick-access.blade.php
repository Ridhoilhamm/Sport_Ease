<x-filament-widgets::widget>
    <!-- Section untuk tombol tambah lapangan -->
    <p class="container ms-2 mb-2">Quick Aksess</p>
    <div class="d-flex  justify-center flex-row gap-4">
        <x-filament::section class="w-1/2 mb-2" style="background-color: #A9DA05">
            <div class="flex gap-8 text-white"  font-style: center">
                <a href="{{ url('admin/lapangans/create') }}" class="px-4 py-2 ">
                    Lapangan
                </a>
            </div>
        </x-filament::section>
    
        <x-filament::section class="w-1/2 mb-2 text-center" style="background-color: #A9DA05">
        <div class="flex gap-8 text-white" style="">
            <a href="{{ url('admin/artikels/create') }}" class="px-4 py-2 text-center">
                Artikel
            </a>
        </div>
    </x-filament::section>
        <x-filament::section class="w-1/2" style="background-color: #A9DA05">
        <div class="flex gap-8 text-white" >
            <a href="{{ url('admin/content-sliders/create') }}" class="px-4 py-2">
                Slider
            </a>
        </div>
    </x-filament::section>
</div>
    
    
</x-filament-widgets::widget>
