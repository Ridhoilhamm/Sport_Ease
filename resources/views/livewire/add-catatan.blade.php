<div>
    <form >
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea id="catatan" class="form-control" wire:model="catatan" rows="4" placeholder="Tambahkan catatan di sini..."></textarea>
            @error('catatan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="ms-auto mb-3 container ">
            <button wire:click="save" class="btn btn-primary text-center ">Simpan</button>
        </div>
    </form>
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
