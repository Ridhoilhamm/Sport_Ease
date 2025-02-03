<div>
    <form  class="container">
        <div class="mb-3 container">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control rounded" wire:model="phone" value="{{ $phone }}">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="text-end mb-3 container ">
            <button wire:click="save" class="btn btn-primary text-center ">Update</button>
        </div>
    </form>

</div>