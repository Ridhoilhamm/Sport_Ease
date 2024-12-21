<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link href="/your-path-to-uicons/css/uicons-rounded-regular.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-timepicker@0.5.2/css/bootstrap-timepicker.min.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
   

    <style>
        body {
            color: rgb(57, 47, 47);
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

        /* modal catatan .modal {
            position: fixed-bottom;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        
        .modal.active {
            visibility: visible;
            opacity: 1;
        }

        /* Modal content */
        /* .modal-content {
            background-color: white;
            width: 90%;
            max-width: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(229, 227, 227, 0.1);
        }

        .modal-header {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ddd;
        }

        .modal-body {
            padding: 15px;
            font-size: 14px;
            color: #333333;
        }

        /* .modal-body textarea {
            width: 100%;
            height: 80px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            box-sizing: border-box;
            resize: none;
        }

        .modal-body textarea:focus {
            border: 1px solid #ddd;
            outline: none;
            box-shadow: none;
        }

        .modal-footer {
            padding: 10px;
            text-align: right;
            background-color: #f7f7f7;
            border-top: 1px solid #ddd;
        }

        .modal-footer button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .modal-footer .close-btn {
            background-color: #ddd;
            color: #333333;
        }

        .modal-footer .save-btn {
            background-color: #007bff;
            color: white;
        } */
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

        /* modals */

        /* Modal Background */
        /* .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Modal Active State */
        /* .modal.active {
            visibility: visible;
            opacity: 1;
        }

        Modal Content */
        /* .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            max-width: 90%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        } */
        */

        /* .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            margin: 0;
        }

        .modal-body {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
        } */
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
    background-color: red;  /* Ganti latar belakang menjadi merah saat hover */
    color: #F5F5F5;           /* Ganti warna teks menjadi putih saat hover */
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

    .nav-link:focus, .nav-link:hover {
    
}

    
    </style>

    @yield('styles')
</head>

<body style="background-color: hsl(210, 17%, 93%);">
    <div style="font-family: 'Ubuntu', sans-serif;">
        <div>

            @if (!isset($hideNavbar) || !$hideNavbar)
                @include('user.nav')
            @endif
            @yield('content')
            @if (!isset($hideFooter) || !$hideFooter)
                @include('user.footer')
            @endif

        </div>

    </div>



</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleIcon = document.getElementById('toggleIcon');
        const paymentOptions = document.getElementById('paymentOptions');

        paymentOptions.addEventListener('show.bs.collapse', function() {
            toggleIcon.classList.add('rotate');
        });

        paymentOptions.addEventListener('hide.bs.collapse', function() {
            toggleIcon.classList.remove('rotate');
        });
    });
</script>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var splide = new Splide('.splide-btn', {
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
{{-- <script>
    $(document).ready(function() {
        $('#jam').timepicker({
            showMeridian: false, // format 24 jam
            minuteStep: 60, // hanya pilih jam
            defaultTime: '08:00',
            showInputs: false // hilangkan input menit
        });
    });
</script> --}}

{{-- validasi tanggal --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#tanggal", {
        minDate: "today", // hanya bisa memilih hari ini atau setelahnya
        dateFormat: "Y-m-d", // format tanggal yang diinginkan
    });
</script>

<script>
    // Ambil elemen dengan ID "current-date"
    const dateElement = document.getElementById('current-date');

    // Dapatkan tanggal saat ini
    const today = new Date();
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    const formattedDate = today.toLocaleDateString('en-US', options);

    // Tampilkan tanggal di elemen
    dateElement.textContent = formattedDate;
</script>

<script>
    document.querySelector('.like-btn').addEventListener('click', function() {
        const button = this;
        const currentState = button.getAttribute('data-state');
        const message = document.getElementById('favorite-message');

        if (currentState === 'not-liked') {
            button.setAttribute('data-state', 'liked');
            button.classList.add('liked');
            saveState(true); // Simpan status
            message.style.display = 'block'; // Tampilkan pesan

            // Menghilangkan pesan setelah 3 detik
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000); // 3000ms = 3 detik
        } else {
            button.setAttribute('data-state', 'not-liked');
            button.classList.remove('liked');
            saveState(false); // Simpan status
            message.style.display = 'none'; // Sembunyikan pesan
        }
    });

    // Fungsi untuk menyimpan status ke localStorage
    function saveState(isLiked) {
        localStorage.setItem('isLiked', isLiked ? 'true' : 'false');
    }

    // Fungsi untuk memuat status dari localStorage
    function loadState() {
        const savedState = localStorage.getItem('isLiked');
        const button = document.querySelector('.like-btn');
        const message = document.getElementById('favorite-message');

        if (savedState === 'true') {
            button.setAttribute('data-state', 'liked');
            button.classList.add('liked');
            message.style.display = 'block'; // Tampilkan pesan

            // Menghilangkan pesan setelah 3 detik
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000); // 3000ms = 3 detik
        } else {
            message.style.display = 'none'; // Sembunyikan pesan
        }
        loadState();
    }

    // Panggil fungsi saat halaman dimuat
</script>
{{-- modal kasih catatan --}}


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

        Fungsi untuk menyimpan catatan ke Local Storage
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

{{-- pop up catatan --}}
<script>
    // Fungsi untuk menampilkan modal
    function saveNote() {
        const noteInput = document.getElementById('note-input');
        const noteDisplay = document.getElementById('note-display');

        // Periksa apakah input tidak kosong
        if (noteInput.value.trim() !== '') {
            // Update teks catatan dan tampilkan
            noteDisplay.textContent = noteInput.value.trim();
            noteDisplay.classList.remove('d-none');
        } else {
            // Jika kosong, sembunyikan catatan
            noteDisplay.classList.add('d-none');
        }

        // Reset input dan tutup modal
    }

    // Fungsi untuk membuka modal (opsional)
</script>
{{-- <script>
    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
</script> --}}

{{-- <script>
document.querySelector('.like-btn').addEventListener('click', function () {
    const button = this;
    const currentState = button.getAttribute('data-state');

    if (currentState === 'not-liked') {
        button.setAttribute('data-state', 'liked');
        button.classList.add('liked');
        saveState(true); // Simpan status
        showNotification('Favorit berhasil ditambahkan');
    } else {
        button.setAttribute('data-state', 'not-liked');
        button.classList.remove('liked');
        saveState(false); // Simpan status
        showNotification('Favorit berhasil dihapus');
    }
});

// Fungsi untuk menampilkan notifikasi
function showNotification(message) {
    const notification = document.getElementById('notification');
    notification.textContent = message;
    notification.classList.add('show');

    // Sembunyikan notifikasi setelah 3 detik
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.style.display = 'none';
        }, 500); // Tunggu transisi selesai
    }, 3000);

    notification.style.display = 'block'; // Tampilkan notifikasi
}

// Fungsi untuk menyimpan status ke localStorage
function saveState(isLiked) {
    localStorage.setItem('isLiked', isLiked ? 'true' : 'false');
}

// Fungsi untuk memuat status dari localStorage
function loadState() {
    const savedState = localStorage.getItem('isLiked');
    if (savedState === 'true') {
        const button = document.querySelector('.like-btn');
        button.setAttribute('data-state', 'liked');
        button.classList.add('liked');
    }
}

// Panggil fungsi saat halaman dimuat
loadState();

</script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#filterTabs a'));
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function (event) {
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
    button.addEventListener('click', function () {
        // Toggle kelas 'selected' pada tombol yang ditekan
        this.classList.toggle('selected');
    });
});
</script>

<script>
    flatpickr("#tanggalPicker", {
        mode: "multiple", // Mode untuk memilih banyak tanggal
        dateFormat: "Y-m-d", // Format tanggal
        minDate: "today", // Opsional: Mulai dari hari ini
        locale: {
            firstDayOfWeek: 1// Pilihan: Set minggu mulai dari Senin
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    document.getElementById('confirmTransaction').addEventListener('click', function() {
            confirmTransaction(); 
        });

        document.querySelector('#transactionModal .kuning').addEventListener('click', function() {
            copyAccountNumber(); 
        });


        function add_image(dt) {
            var data = $(dt.element).data();
            var text = $(dt.element).text();

            if (data && data['image']) {
                var image = data['image']; // Nama file gambar
                var dt_image = $(
                    "<span><img src='" + "{{ asset('images/') }}" + "/" + image +
                    "' style='width:30px; height:30px; border-radius:25%; margin-right:10px;' />" + text + "</span>"
                );
                return dt_image;
            }

            return text;
        }

        var pilihan = {
            'templateSelection': add_image, 
            'templateResult': add_image, 
            'minimumResultsForSearch': -1
        };

        $("#metode_pembayaran").select2(pilihan);

        function showModal(name, imageUrl) {
            Swal.fire({
                title: name,
                imageUrl: imageUrl,
                imageWidth: 200,
                imageHeight: 200,
                imageAlt: ${name}'s image,
                confirmButtonText: 'Close',
                customClass: {
                    image: 'rounded-image'
                }
            });
        }
    </script>

</script>
<script>
    document.getElementById("readMoreBtn").addEventListener("click", function () {
        const dots = document.getElementById("dots");
        const moreText = document.getElementById("more");
        const btnText = document.getElementById("readMoreBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            moreText.style.display = "none";
            btnText.textContent = "Lihat Selengkapnya";
        } else {
            dots.style.display = "none";
            moreText.style.display = "inline";
            btnText.textContent = "Tampilkan Lebih Sedikit";
        }
    });
</script>

<script>
    const header = document.getElementById('header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.style.backgroundColor = 'white'; // Ubah menjadi putih
            header.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)'; // Tambahkan bayangan (opsional)
        } else {
            header.style.backgroundColor = 'transparent'; // Kembali ke transparan
            header.style.boxShadow = 'none'; // Hilangkan bayangan
        }
    });
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
                '<span><img src="' + img + '" style="width: 20px; height: 20px; margin-right: 10px;"/>' + option.text + '</span>'
            );
            return $option;
        }
    });
</script>
<script>
    $('.your-select-element').select2({
    placeholder: 'Pilih opsi',
    allowClear: true  // Opsi ini memungkinkan pengguna untuk menghapus pilihan
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</html>
