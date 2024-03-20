@php
    $isAdmin = Auth::user()->isAdmin();

    // dd(Auth::user());
    $routeListCrypto = route('list.crypto.customer');
    $routeProfil = route('profil.customer');

    if ($isAdmin) {
        $routeListCrypto = route('list.crypto.admin');
        $routeProfil = route('profil.admin');

    }
@endphp

{{-- <nav class="navbar navbar-dark bg-transparent ">

    <div class="container-fluid">
        <button class="navbar-toggler bg-primary bg-gradient" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start side " tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-75">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item  d-flex justify-content-center ">
                        @yield('homeButton')
                    </li>
                    <li class="nav-item mt-5 d-flex justify-content-center ">
                        @yield('walletbutton')
                    </li>
                    <li class="nav-item mt-4 d-flex justify-content-center ">
                        <a class=" mt-3 text-decoration-none text-white" href="{{ $routeListCrypto }}">
                            <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" class="w-75"
                                alt=""> <br>
                            <span>Buy & Sell</span>
                        </a>
                    </li>


                    <li class="nav-item mt-4 d-flex flex-column mb-3">
                        <a class="nav-link nav-icon-hover align-self-center" href="{{ $routeProfil }}">
                            <img src="{{ asset('assets/images/user.png') }}" alt="">
                            <span class="align-self-center text-light">My profil</span>
                        </a>
                    </li>

                    <a href="{{ route('logout') }}" class="btx">Logout</a>

                </ul>

            </div>
        </div>
    </div>
</nav> --}}

<div class="col-md-12 sidebar  col-lg-2 col-sm-12" style=" z-index:1;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-75">
            </div>
            <div class="col-md-12 mt-5 mb-5">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @can('do_transaction')
                        <li class="nav-item  d-flex justify-content-center ">
                            <a href="{{ route('dashboard.customer') }}" class="text-decoration-none text-white">
                                <img src="{{ asset('assets/images/accueil.png') }}" alt="" class="w-75"> <br>
                                <span>Home</span>
                            </a>
                        </li>
                    @endcan

                    @cannot('do_transaction')
                        <li class="nav-item  d-flex justify-content-center ">
                            <a class="nav-link" href="{{ route('list.customers') }}">
                                <img src="{{ asset('assets/images/customer_icon.png') }}" alt=""><br>
                                <span>Customers</span>
                            </a>
                        </li>
                    @endcannot

                    @can('do_transaction')
                        <li class="nav-item mt-5 d-flex justify-content-center ">
                            <a class="nav-link" href="{{ route('wallet') }}">
                                <img src="{{ asset('assets/images/application-wallet-pass.png') }}" alt=""
                                    class="w-75"><br>
                                <span>Wallet</span>
                            </a>
                        </li>
                    @endcan


                    <li class="nav-item mt-4 d-flex justify-content-center ">
                        <a class=" mt-3 text-decoration-none text-white" href="{{ $routeListCrypto }}">
                            <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" class="w-75"
                                alt=""> <br>
                            <span>Buy & Sell</span>
                        </a>
                    </li>


                    <li class="nav-item mt-4 d-flex flex-column mb-3">
                        <a class="nav-link nav-icon-hover align-self-center" href="{{ $routeProfil }}">
                            <img src="{{ asset('assets/images/user.png') }}" alt="">
                            <span class="align-self-center text-light">My profil</span>
                        </a>
                    </li>

                    <a href="{{ route('logout') }}" class="btx">Logout</a>

                </ul>
            </div>
        </div>
    </div>
</div>
