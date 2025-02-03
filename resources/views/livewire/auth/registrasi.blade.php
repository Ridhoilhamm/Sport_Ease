
<div class="container d-flex justify-content-center align-items-center vh-100 rounded">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h4 class="text-center fw-bold" style="font-size:16px">Registrasi</h4>
        
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <form wire:submit.prevent="registrasi" class="mt-3">
                <div class="mb-3">
                    
                    <input type="text" wire:model="name" class="form-control rounded" placeholder="Username" style="font-size:14px">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-3">
                <input type="email" wire:model="email" class="form-control rounded" placeholder="Email" style="font-size:14px">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <input type="password" wire:model="password" class="form-control rounded" placeholder="Password" style="font-size:14px">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <input type="password" wire:model="password_confirmation" class="form-control rounded" placeholder="Konfirmasi Password" style="font-size:14px">
            </div>

            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        
        <div class="text-center mt-3">
            <small>Sudah punya akun? <a href="/login" class="fw-bold" style="color:#A9DA05">Login di sini</a></small>
        </div>
    </div>
</div>

