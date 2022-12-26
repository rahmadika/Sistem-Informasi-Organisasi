<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RAL-@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> --}}

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>
  <link rel="stylesheet" href="{{ asset('js/fontawesome-free/css/all.min.css') }}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  {{-- Data Table --}}
   
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> --}}

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet" type="text/css">

  {{-- Sript Ajax --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> --}}
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
  
        <div class="logo">
          <h1><a href="{{ route('welcome.home') }}">Ream A Leizen</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="{{ route('welcome.home') }}">Home</a></li>
            <li><a class="nav-link" href="{{ route('about.tentang') }}">About</a></li>
            <li><a class="nav-link" href="{{ route('member.anggota') }}">Anggota</a></li>
            <li><a class="nav-link" href="{{ route('transaction.keuangan') }}">Keuangan</a></li>
            <li><a class="nav-link" href="{{ route('event.acara') }}">Acara</a></li>
            <li><a class="nav-link" href="{{ route('news.berita') }}">Berita</a></li>
            <li class="dropdown"><a href="#"><span>
              {{-- @if($user->profile->avatar)
              <img class="profile-menu" src="{{ Storage::url(auth()->user()->profile->avatar) }}" width="30px" />
              @else
              <img class="profile-menu" src="{{ asset('img/profile/default.png') }}" width="30px" />
              @endif --}}
            </span><i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('user.profile') }}">Profile</a></li>
                <li><a href="{{url('logout')}}">Log Out</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
    
    <div class="wrapper">
      <div class="content-wrapper">
        <div class="content">
            @yield('content')
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="copyright">
              &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
              Contact Us : 
              <a href="https://instagram.com/616generation?igshid=YmMyMTA2M2Y=" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-instagram-new-logo-vector-download-13.png" width="25px" alt="logo ig, instagram new logo vector download"/> Instagram </a>
                <a href="" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/whatsapp-png-logo-1.png" width="25px" alt="whatsapp png logo" /> WhatsApp</a>
                <a href="" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/gmail-email-logo-png-16.png" width="25px" alt="gmail, email logo png" /> Email</a>
            </nav>
          </div>
        </div>
      </div>
    </footer><!-- End Footer -->
    
    


  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/nav.js"></script>

</body>

</html>
