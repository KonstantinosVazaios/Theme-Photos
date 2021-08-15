<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechnoPOS Theme | Restaurants | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Fontastic Custom icon font-->
    <link href="{{ asset('admin/css/fontastic.css') }}" rel="stylesheet">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link href="{{ asset('admin/css/style.default.css') }}" id="theme-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    @yield('styles')


  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="#" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Admin </span><strong> Restaurant</strong></div>
                <!-- Toggle Button--><a id="toggle-btn" href="#" style="display: none" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="logout-btn">Logout</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center border-bottom">
            <div class="avatar"><i style="font-size: 40px; " class="icon-user"></i></div>
            <div class="title">
              <h1 class="h4">ADMINISTRATOR</h1>
              <strong>Panel</strong>
            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="/admin/homu/mail"> <i class="icon-mail"></i>Mail </a></li>
            <li><a href="/admin/homu/menu"> <i class="icon-bill"></i>Menu </a></li>
            <li><a href="/admin/homu/background/1"> <i class="icon-screen"></i>Φόντο</a></li>
            <li><a href="/admin/homu/content"> <i class="icon-grid"></i>Περιεχόμενο / Αρχική </a></li>
            <li><a href="/admin/homu/about"> <i class="icon-check"></i>Περιεχόμενο / About </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">@yield('title')</h2>
            </div>
          </header>

          <!--yield -->
          @yield('content')
          <!--yield -->

          <!-- Page Footer-->
        </div>
      </div>
    </div>

  </body>
</html>
