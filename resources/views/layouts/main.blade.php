<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/css/styles.css">
      <link href="/css/dashboard.css" rel="stylesheet">
      <link rel="stylesheet" href="/css/app.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>{{ $title }}</title>
      <!-- Trix Editor -->
      <link rel="stylesheet" type="text/css" href="/css/trix.css">
      <script type="text/javascript" src="/js/trix.js"></script>

      <style>
        trix-toolbar [data-trix-button-group='file-tools'] {
          display: none;
        }
      </style>
  </head>
  <body>

  <header class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a href="#page-top" class="brand-logo">PLAY<span class="sub-brand-logo">film</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link {{ ($title === 'Homepage') ? 'active' : '' }}" href="/">Home</a></li>
            <!-- kurang search button -->
            @auth
            <li class="nav-item"><a class="nav-link {{ ($title === 'Dashboard') ? 'active' : ''}}" href="/dashboard">Dashboard</a></li>
            <li class="nav-item dropdown">
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @else
                <li class="nav-item"><a class="nav-link {{ ($title === 'Login & Register') ? 'active' : '' }}" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
            @endauth
        </ul>
      </div>
    </div>
  </header>

  <div class="container">
  @yield('content')
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
  </body>
</html>