<div class="container  sidebar text-center">
    <div class="row">
        <div class="col-md-12 mt-3 mb-5">
            <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" class="w-50">
        </div>
        @yield('homeButton')
        <div class="col-md-12  text-light mt-3 mb-5">
            <a href="" class="text-decoration-none text-white">
                <img src="{{ asset('assets/images/graphique-en-ligne.png') }}" alt="" width="10%"> <br>
                <span>Buy & Sell</span>
            </a>
        </div>
        <div class="col-md-12  text-light mt-3 mb-5">
            <a href="" class="text-decoration-none text-white">
              @yield('walletbutton')
            </a>
        </div>
    </div>
</div>





