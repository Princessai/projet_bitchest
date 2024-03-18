
<nav class="navbar navbar-dark bg-transparent ">
  <div class="container-fluid">
    <button class="navbar-toggler bg-primary bg-gradient" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start side " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
      <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-75">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item  d-flex justify-content-center ">
            <a class="nav-link "  href="#">
                  @yield('homeButton')
                </a>
          </li>
          <li class="nav-item mt-5 d-flex justify-content-center ">
            <a class="nav-link" href="/wallet"> 
              @yield('walletbutton')
            </a>
          </li>
          <li class="nav-item mt-4 d-flex justify-content-center ">
            <a href="nav-link" class=" mt-3 text-decoration-none text-white" href="/marche">
                  <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" class="w-75" alt="" > <br>
                <span>Buy & Sell</span>
            </a>
          </li>

         
          <li class="nav-item mt-4 d-flex flex-column mb-3">
          <a class="nav-link nav-icon-hover align-self-center" href="" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/images/user.png') }}" alt="" 
                                 >
                        </a>   <span class="align-self-center text-light">My profile</span>
          </li>

  <a href="/logout" class="btx">Logout</a>

        </ul>
        
      </div>
    </div>
  </div>
</nav>