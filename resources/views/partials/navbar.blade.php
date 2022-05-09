<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-5">
          <ul class="nav flex-column">
            @can('admin')
            <li class="nav-item">
              <a href="/dashboard" class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Dashboard Admin
              </a>
            </li>
            @endcan
            <li class="nav-item">
              <a href="/myaccount" class="nav-link" href="#">
                <span data-feather="file"></span>
                My Account
              </a>
            </li>
            @can('admin')
            <li class="nav-item">
              <a href="/datafilms" class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Data Film
              </a>
            </li>
            <li class="nav-item">
              <a href="/datausers" class="nav-link" href="#">
                <span data-feather="users"></span>
                Data User
              </a>
            </li>
            @endcan
            <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
            @csrf
                  <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</button>
                </form>
              </li>
            @endauth
          </ul>
        </div>
      </nav>