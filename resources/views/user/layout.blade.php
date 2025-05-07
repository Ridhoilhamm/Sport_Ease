<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.0/lottie.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>

    @livewireStyles
    
    @stack('styles')
    @stack('scripts')
    <style>
        
    .selected-time {
        background-color: #28a745 !important;
        color: white;
    }

    .selected-time:hover {
        background-color: #218838 !important;
    }

    body, img {
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}


        .text-success {
            color: #A9DA05 !important;
            /* Contoh hijau terang */
        }

        .btn btn-success {
            color: #A9DA05 !important;
            /* Contoh hijau terang */
        }

        .text-secondary {
            color: #757475 !important;
            /* Contoh abu-abu */
        }

        .blur-effect {
            backdrop-filter: blur(10px);
            /* Efek blur */
            -webkit-backdrop-filter: blur(10px);
            /* Efek blur untuk Safari */
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.7), rgba(0, 0, 0, 0.2));
            /* Gradasi putih ke hitam */
            color: white;
        }

        /* .modal-bottom .modal-dialog {
            position: absolute;
            bottom: 0;
            margin: 0;
            width: 100%;
            max-width: none;
            transition: transform 0.3s ease-out;
        }

        .modal-bottom .modal-content {
            border-radius: 1rem 1rem 0 0;
        } */

        .splide {
            padding-top: 0px;
            border-radius: 0px;
            overflow: hidden;
            position: relative;
        }


        .splide__track {
            position: relative;
            z-index: 1;
            /* Pastikan slide tetap di bawah ikon */
        }

        button {
            z-index: 10;
            /* Ikon tetap di atas slide */
        }


        .splide__slide {
            border-radius: 15px;
            overflow: hidden;
        }





        .splide__image {
            border-radius: 15px;
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .splide__image1 {
            border-radius: 0px;
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }

        .splide__pagination {
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
            margin: 0;
            padding: 0;
        }

        .splide_pagination_page {
            height: 4px;
            /* Mengatur tinggi garis */
            width: 20px;
            /* Mengatur panjang garis */
            background: rgba(255, 255, 255, 0.504);
            transition: background 0.3s ease, transform 0.3s ease;
            border-radius: 2px;
            /* Memberikan sedikit kelengkungan pada ujung */
        }


        .splide_pagination_page.is-active {
            background: #c7980b8c;
            width: 8px;
            height: 8px;
        }

        .splide__track--draggable {
            border-radius: 15px;
        }



        .Splide @media (max-width: 600px) {
            .splide_pagination_page {
                width: 6px;
                height: 6px;
            }
        }

        /* baru */
        .like-btn svg {
            transition: fill 0.3s ease, stroke 0.3s ease;
        }

        .like-btn.liked svg {
            fill: red;
            /* Warna saat disukai */
            stroke: red;
        }

        /* /notify favorite */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #28a745;
            /* Warna hijau untuk berhasil */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            z-index: 1050;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .notification.show {
            display: block;
            opacity: 1;
        }

        /* Hide scrollbar while maintaining scroll functionality */
        .px-2 pt-0 mb-3 div {
            overflow-x: scroll;
            /* Ensure scroll is enabled */
        }

        .px-2 pt-0 mb-3 div::-webkit-scrollbar {
            display: none;
            /* Hide the scrollbar visually */
        }

        .px-2 pt-0 mb-3 div {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        section::-webkit-scrollbar-thumb {
            background-color: #ac9d9d00;
            border-radius: 10px;
        }

        section::-webkit-scrollbar-track {
            background-color: #00000000;
        }

        /* Untuk Firefox */
        section {
            scrollbar-width: thin;
            scrollbar-color: #00000000 #00000000;
        }

        input:focus,

        input:focus,
        button:focus {
            outline: none !important;
            /* Paksa hilangkan outline */
            box-shadow: none !important;
            /* Paksa hilangkan shadow */
            /* border-color: transparent !important; Hilangkan perubahan warna border */
        }

        /* Tambahan untuk elemen input dan tombol secara umum */
        input,
        button {
            user-select: none;
            /* Mencegah efek seleksi teks */
            -webkit-tap-highlight-color: transparent;
            /* Hilangkan highlight di perangkat touch */
        }

        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .promo-banner {
            background-color: #dfffe0;
            color: #28a745;
            padding: 10px;
            border-radius: 8px;
        }

        .btn-checkout {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }

        /* promo bannner no rounded */
        .promo-banner {
            /* Gaya lain yang sudah ada */
            border-radius: 0;
        }

        
        */ .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .d-none {
            display: none !important;
        }

        /* button */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 25px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 25px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 17px;
            width: 17px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:checked+.slider:before {
            transform: translateX(25px);
        }

        /*  */

        .cod-badge {
            background-color: #d1f5d3;
            color: #28a745;
            font-weight: bold;
            border-radius: 5px;
            padding: 2px 8px;
            font-size: 12px;
        }

        .info-icon {
            color: #6c757d;
            font-size: 14px;
            cursor: pointer;
        }

        .icon {
            cursor: pointer;
        }

        
        */ */ .modal-header-custom {
            background: linear-gradient(to right, #6bd6f3, #6a96f3);
            color: white;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        /* Kustomisasi kartu promo */
        .promo-card {
            background-color: #eaffee;
            border-radius: 1rem;
            padding: 1rem;
            position: relative;
        }

        .promo-card-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            color: green;
        }

        /* Style tambahan */
        .btn-back {
            border-radius: 1rem;
        }

        button {
            cursor: pointer;
        }

        hover-active:hover {
            background-color: red;
            /* Ganti latar belakang menjadi merah saat hover */
            color: #F5F5F5;
            /* Ganti warna teks menjadi putih saat hover */
        }

        .hover-active:hover svg {
            background-color: #cf2e0d;
            stroke: white;
            /* Ganti warna stroke ikon menjadi putih saat hover */
            /* Ganti warna stroke ikon menjadi putih saat hover */
        }

        /* slider kedua */
        /* Tombol Navigasi */


        a {
            text-decoration: none;
        }

        .nav-link:focus,
        .nav-link:hover {}

        .selected-day {
            background-color: #28a745 !important;
            /* Warna hijau (success) */
            color: white !important;
            /* Teks berwarna putih */
            border-color: #28a745 !important;
        }
    </style>
      @vite('resources/css/app.css')

</head>

<body style="background-color: hsl(210, 17%, 93%);">
    <div style="font-family: 'Ubuntu', sans-serif;">
        <div>
            
            
            @yield('styles')

            @if (!isset($hideNavbar) || !$hideNavbar)
                @include('user.nav')
            @endif
            @yield('content')
            @if (!isset($hideFooter) || !$hideFooter)
                @include('user.footer')
            @endif
            @stack('scripts')
        </div>

    </div>


        @livewireScripts
      
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <x-livewire-alert::scripts />
        
      




<script>
    document.addEventListener('DOMContentLoaded', function() {
        var splide = new Splide('.splide', {
            type: 'loop',
            autoplay: true,
            interval: 3000,
            perPage: 1,
            pagination: true,
            arrows: false,
            snap: true,
        });

        splide.mount();
    });
</script>





{{-- digunakan untuk menyimpan jam pilihan user --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".btn[data-time]");
        const selectedTime = localStorage.getItem("selectedTime");

        // Jika ada pilihan tersimpan, tambahkan class "active" pada tombol yang sesuai
        if (selectedTime) {
            buttons.forEach((button) => {
                if (button.getAttribute("data-time") === selectedTime) {
                    button.classList.add("btn-success");
                    button.classList.remove("btn-outline-success");
                }
            });
        }

        // Tambahkan event listener untuk tombol
        buttons.forEach((button) => {
            button.addEventListener("click", function() {
                // Hapus class "active" dari semua tombol
                buttons.forEach((btn) => {
                    btn.classList.add("btn-outline-success");
                    btn.classList.remove("btn-success");
                });

                // Tambahkan class "active" ke tombol yang diklik
                this.classList.add("btn-success");
                this.classList.remove("btn-outline-success");

                // Simpan pilihan ke local storage
                localStorage.setItem("selectedTime", this.getAttribute("data-time"));
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-timepicker@0.5.2/js/bootstrap-timepicker.min.js"></script>


<script>
    function openModal() {
        document.getElementById('modal').classList.add('active');
    }

    function closeModal() {
        document.getElementById('modal').classList.remove('active');
    }
</script>
{{-- simpan catatan --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const noteTextarea = document.getElementById("order-note");
        const noteDisplay = document.getElementById("note-display");

        // Ambil catatan dari Local Storage saat halaman dimuat
        const savedNote = localStorage.getItem("orderNote");
        if (savedNote) {
            noteTextarea.value = savedNote;
            noteDisplay.textContent = savedNote;
        }

        // Fungsi untuk menyimpan catatan ke Local Storage
        window.saveNote = function() {
            const note = noteTextarea.value;
            localStorage.setItem("orderNote", note); // Simpan ke Local Storage
            noteDisplay.textContent = note || "Belum ada catatan."; // Perbarui tampilan catatan
            closeModal(); // Tutup modal
        };

        // Fungsi untuk membuka modal
        window.openModal = function() {
            document.getElementById("modal").classList.add("active");
        };

        // Fungsi untuk menutup modal
        window.closeModal = function() {
            document.getElementById("modal").classList.remove("active");
        };
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#filterTabs a'));
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function(event) {
            event.preventDefault();
            tabTrigger.show();
        });
    });
</script>
<script>
    // Ambil semua tombol
    const buttons = document.querySelectorAll('.btn');

    // Tambahkan event listener ke setiap tombol
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Toggle kelas 'selected' pada tombol yang ditekan
            this.classList.toggle('selected');
        });
    });
</script>


</script>




<script>
    $(document).ready(function() {
        $('#bankSelector').select2({
            templateResult: formatOption,
            templateSelection: formatOption
        });

        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }
            var img = $(option.element).data('image');
            var $option = $(
                '<span><img src="' + img + '" style="width: 20px; height: 20px; margin-right: 10px;"/>' +
                option.text + '</span>'
            );
            return $option;
        }
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</body>
</html>
