<div class="container py-5 mt-1">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
            <div class="mt-5 mx-3 rounded shadow-md"> 
                <div class="card-body abu emas py-5 px-4 shadow rounded">
                    <form wire:submit.prevent="login">
                        <h1 class="fs-5 pb-2 pt-2 text-center">Login</h1>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label fs-7">Email</label>
                            <input type="email" id="email" class="form-control" wire:model="email" placeholder="Masukkan email" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
 
                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label fs-7">Password</label>
                            <input type="password" id="password" class="form-control" wire:model="password" placeholder="Masukkan password" required>
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-3">
                            <input type="checkbox" id="remember" class="form-check-input" wire:model="remember">
                            <label for="remember" class="form-check-label fs-7">Ingat saya</label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn kuning text-white fw-bold py-2 px-4 w-100 fs-7">Login</button>

                        <a href="#" class="text-decoration-none text-warning mt-2 fs-7 text-end d-block mb-2">Lupa password?</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
