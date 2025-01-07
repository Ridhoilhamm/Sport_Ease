<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>owner-page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.0/lottie.min.js"></script>
</head>

<style>
 
    
  
  
  .text-success {
            color: #A9DA05 !important;
            /* Contoh hijau terang */
        }

</style>
@yield('styles')
<body style="background-color: hsl(210, 17%, 93%);">
    <div style="font-family: 'Ubuntu', sans-serif;">

        @if (!isset($hideSidebar) || !$hideSidebar)
        @include('owner.footer-owner')
        @include('owner.nav-owner')
    @endif
    @yield('content')
    @if (!isset($hideNavbar) || !$hideNavbar)
    @endif
    </div>


  </body>
  <script>
    var chatAnimation = lottie.loadAnimation({
        container: document.getElementById('chat-animation'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'chat-animation.json' // Sesuaikan dengan lokasi file JSON
    });
</script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Menampilkan gambar sesuai dengan ukuran
        spaceBetween: 10,       // Jarak antar gambar
        loop: true,             // Looping slider
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  </html>