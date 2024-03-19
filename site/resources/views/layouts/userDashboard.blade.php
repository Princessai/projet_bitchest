@extends('base')
        @section('homeButton')
        <a href="{{ route('dashboard.customer') }}" class="text-decoration-none text-white">
            <img src="{{ asset('assets/images/accueil.png') }}" alt=""  class="w-75 butside"> <br>
            <span>Home</span>
        </a>
@endsection

@section('walletbutton')
    <img src="{{ asset('assets/images/application-wallet-pass.png') }}" alt="" class="w-75 butside" ><br>
    <span class="text-light">Wallet</span>
@endsection


@section('profilebutton')
<img src="{{ asset('assets/images/user.png') }}" alt="">
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


