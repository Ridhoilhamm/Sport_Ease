@if (session('message'))
<div class="alert alert-success alert-dismissible fade show container" style="color: black" role="alert">
    <div class="container">

        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

    <script>
        // Menghilangkan flash message setelah 5 detik
        setTimeout(() => {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.transition = 'opacity 0.5s';
                flashMessage.style.opacity = 0;
                setTimeout(() => flashMessage.remove(), 500); // Hapus elemen setelah animasi selesai
            }
        }, 5000); // 5000 ms = 5 detik
    </script>
@endif
