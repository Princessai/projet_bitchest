@extends('base')
        @section('homeButton')
        <a href="/homeCustomer" class="text-decoration-none text-white">
            <img src="{{ asset('assets/images/accueil.png') }}" alt=""  class="w-75"> <br>
            <span>Home</span>
        </a>
@endsection

@section('walletbutton')
    <img src="{{ asset('assets/images/application-wallet-pass.png') }}" alt=""  class="w-75" ><br>
    <span>Wallet</span>
@endsection

@section('body')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-7">
                @yield('bodycontent')
            </div>
            <div class="col-md-12 col-md-12 col-lg-5 shadow-sm p-3 mb-5 rounded ">
                @yield('sidecontent')
            </div>
        </div>
    </div>
@endsection


