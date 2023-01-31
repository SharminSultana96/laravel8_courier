<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Latest compiled and minified CSS -->
  <link href="/frontend_assets/img/favicon.png" rel="icon">
  <link href="/frontend_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/frontend_assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/frontend_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/frontend_assets/css/style.css" rel="stylesheet">
  

<body>
  @include('frontend.header')
  <div class="container">
    @yield('content')
  </div>
  @include('frontend.footer')
  <!-- Vendor JS Files -->
  <script src="/frontend_assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/frontend_assets/vendor/aos/aos.js"></script>
  <script src="/frontend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend_assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/frontend_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend_assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/frontend_assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/frontend_assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend_assets/js/main.js"></script>
</body>

</html>
