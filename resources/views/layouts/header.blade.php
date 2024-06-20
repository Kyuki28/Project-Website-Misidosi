


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" href=""/>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
        }
        .navbar {
            border-bottom: 2px solid #1E1EB9; /* Garis bawah di navbar */
        }

        #main-navbar {
            height: 65px;
        }

        .warna {
            background-color: #1E1EB9;
        }
        .warnus {
         color: #1E1EB9;
        }
    </style>
</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse"style="background-color: #ffffff;">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4 rounded">
        <a href="beranda-admin" class="list-group-item list-group-item-action py-2 ripple warna" aria-current="true">
          <i class="bi bi-house-door me-3 text-white"></i><span class="text-white">Beranda</span>
        </a>
        <a href="validasi" class="list-group-item list-group-item-action py-2 ripple warna">
          <i class="bi bi-check-square me-3 text-white"></i><span class="text-white">Validasi Donasi</span>
      </a>
      <a href="laporan-donasi" class="list-group-item list-group-item-action py-2 ripple warna">
      <i class="bi bi-journal-text me-3 text-white"></i><span class="text-white">Laporan Donasi</span>
      </a>
    </div>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-top mt-5">
        <p class="text-primary fw-bold m-0"><a href="{{ route('actionlogout') }}" class="list-group-item warnus"><i class="bi bi-box-arrow-left me-2"></i>Keluar</a></p>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffffff;>

    <!-- Container wrapper -->
    <div class="container-fluid">

       
      <!-- Toggle button -->
      <button data-mdb-button-init class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <div class="d-grid align-items-center justify-content-center">
      <a class="navbar-brand" href="#">
        <img class="rounded d-block mx-auto ms-4 img-crop" src="assets/logo-dasbor.png" height="30" width="150" alt=""
          loading="lazy" />
      </a>
      </div>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a class="nav-link d-flex align-items-center warnus" href="#">
          <i class="bi bi-person-circle me-2 warnus"></i><span class="warnus">Welcome, Admin</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->

  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4 d-flex flex-column min-vh-100">
    @yield('container')
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Main layout-->
</body>
</html>