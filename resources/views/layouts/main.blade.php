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

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
      <div class="container">
          <a href="#page-top" class="brand-logo">PLAY<span class="sub-brand-logo">film</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars ms-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link {{ ($title === 'Homepage') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/films">Films</a></li>
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Dashboard</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="/myaccount" class="dropdown-item">My Account</a></li>
                    @can('admin')
                    <li><a href="/dashboardadmin" class="dropdown-item">Dashboard Admin</a></li>
                    <li><a href="/dataadmins" class="dropdown-item">Data Admin</a></li>
                    <li><a href="/datafilms" class="dropdown-item">Data Film</a></li>
                    <li><a href="/datausers" class="dropdown-item">Data User</a></li>
                    @endcan
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</button>
                      </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link {{ ($title === 'Login & Register') ? 'active' : '' }}" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                @endauth
            </ul>
          </div>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>