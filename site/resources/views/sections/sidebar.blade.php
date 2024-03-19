
<div class="col-md-12 sidebar  col-lg-2 col-sm-12" style=" z-index:1;">
<div class="container text-center">
  <div class="row">
    <div class="col-md-12 mt-3 ">
    <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-75">
    </div>
    <div class="col-md-12 mt-5 mb-5">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item  d-flex justify-content-center ">
                  @yield('homeButton')
          </li>
          <li class="nav-item mt-5 d-flex justify-content-center ">
            <a class="nav-link" href="{{ route('wallet.crypto') }}"> 
              @yield('walletbutton')
            </a>
          </li>
          <li class="nav-item mt-4 d-flex justify-content-center ">
            <a class=" mt-3 text-decoration-none text-white" href="{{route('list.crypto')}}">
                  <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" class="w-75 butside" alt="" > <br>
                <span>Buy & Sell</span>
            </a>
          </li>
        
        </ul>
    </div>
    <div class="col-md-12 d-flex flex-column mt-5">
                            @yield('profilebutton') 
         <span class="align-self-center text-light">My profile</span>

        <a href="{{ route('logout') }}" class="btx mt-3">Logout</a>
    </div>
  </div>
</div>
    </div>