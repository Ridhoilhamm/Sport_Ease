<div>
    <style>
        .favorite-button {
    width: 45px;          /* Menentukan lebar tombol */
    height: 45px;         /* Menentukan tinggi tombol */
    display: flex;        /* Menggunakan Flexbox untuk memusatkan ikon */
    justify-content: center; /* Memusatkan ikon secara horizontal */
    align-items: center;  /* Memusatkan ikon secara vertikal */
    background-color: white; /* Warna latar belakang tombol */
    border: 2px solid #ddd; /* Warna border tombol */
    border-radius: 50%;    /* Membuat tombol berbentuk lingkaran */
    padding: 0;           /* Menghilangkan padding tambahan */
    cursor: pointer;      /* Menambahkan pointer cursor saat hover */
    transition: background-color 0.3s ease, border-color 0.3s ease; /* Animasi transisi */
}

.favorite-button:hover {
    background-color: #f8f9fa; /* Warna latar belakang saat hover */
    border-color: #ccc;        /* Warna border saat hover */
}

    </style>
    <button wire:click="toggleFavorite" class="favorite-button">
        <!-- Ikon Heart dengan Bootstrap untuk mengubah warna -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
            class="icon icon-tabler icons-tabler-filled icon-tabler-heart {{ $lapangan->is_favorite ? 'text-danger' : 'text-muted' }}">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" />
        </svg>
    </button>
</div>
