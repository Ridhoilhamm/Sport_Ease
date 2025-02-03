<div>
    <form >
        <div class="mb-3">
            <textarea id="catatan" class="form-control" wire:model="catatan" rows="4" placeholder="Tambahkan catatan di sini..."></textarea>
            @error('catatan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="text-end mb-3 container  ">
            <button wire:click="save" class="btn btn-primary text-center ms-auto">Simpan</button>
        </div>
    </form>
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
