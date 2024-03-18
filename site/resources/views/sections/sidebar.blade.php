<div class="container  sidebar text-center">
    <div class="row">
        <div class="col-md-12 mt-3 mb-5">
            <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-50">
        </div>
        @yield('homeButton')
        <div class="col-md-12  text-light mt-3 mb-5">
            <a href="/marche" class="text-decoration-none text-white">
                <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" alt="" width="10%"> <br>
                <span>Buy & Sell</span>
            </a>
        </div>
        <div class="col-md-12  text-light mt-3 mb-5">
            <a href="/wallet" class="text-decoration-none text-white">
              @yield('walletbutton')
            </a>
        </div>
        <div class="col-md-12  text-light mt-3 mb-5">
            
                        <a class="nav-link nav-icon-hover" href="" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/images/utilisateur.png') }}" alt="" width="35"
                                height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-2"></i>
                                    <p class="mb-0 ">My Profile</p>
                                </a>
                                <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
        </div>
    </div>
</div>





