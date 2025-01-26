<div>
    <form  class="container">
        <div class="mb-3 container">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control rounded" wire:model="phone" value="{{ $phone }}">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    
        <div class="mb-3 container ">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" wire:model="address">{{ $address }}</textarea>
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="ms-auto mb-3 container ">
            <button wire:click="save" class="btn btn-primary text-center ">Simpan</button>
        </div>
    </form>

</div>