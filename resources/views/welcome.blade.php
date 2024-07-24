<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>GEN Z EDU</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('template/stisla/dist/')}}/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('template/stisla/dist/')}}/assets/modules/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('template/stisla/dist/')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('template/stisla/dist/')}}/assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">


      <div class="w-md-50 p-5 text-center">
        <h1>GEN Z EDU</h1>
        <img src="{{ asset("./logo.png") }}" width="200">
        <a href="{{ route("login") }}" class="btn btn-warning btn-block mt-5">
          Login
        </a>
        <a href="{{ asset("gen-z-edu_app.apk") }}" class="btn btn-outline-warning btn-block">
          Download Aplikasi Gen Z Edu
        </a>
      </div>
      <div class="px-3 py-4" style="box-shadow: 0 -10px 12px rgba(0,0,0,0.1); border-top-right-radius: 10px; border-top-left-radius: 20px">
        <b>Apa itu Gen Z Edu?</b>
        <p>
          Merupakan aplikasi untuk mendukung kreatifitas siswa dalam mengembangkan potensi, serta membantu siswa untuk belajar menggunakan teknologi dalam hal positif, juga membantu guru untuk menyusun administrasi sekolah.
        </p>

        <center>
          <small class="text-warning">Copyright &copy; by Tim Gercepp</small>
        </center>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/jquery.min.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/popper.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/tooltip.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/modules/moment.min.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/js/stisla.js"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('template/stisla/dist/')}}/assets/js/page/bootstrap-modal.js"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('template/stisla/dist/')}}/assets/js/scripts.js"></script>
  <script src="{{asset('template/stisla/dist/')}}/assets/js/custom.js"></script>
</body>
</html>