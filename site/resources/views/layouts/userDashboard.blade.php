@extends('base')
@section('homeButton')
    <div class="col-md-12 mt-3 mb-5">
        <a href="" class="text-decoration-none text-white">
            <img src="{{ asset('assets/images/accueil.png') }}" alt="" width="10%"> <br>
            <span>Home</span>
        </a>
    </div>
@endsection

@section('walletbutton')
    <img src="{{ asset('assets/images/application-wallet-pass.png') }}" alt="" width="10%"><br>
    <span>Wallet</span>
@endsection

@section('body')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-7 ">
                @yield('bodycontent')
            </div>
            <div class="col-md-5 shadow p-3 mb-5  rounded">
                @yield('sidecontent')
            </div>
        </div>
    </div>
@endsection

