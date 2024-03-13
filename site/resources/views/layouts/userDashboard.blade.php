@extends('base')

@section('homeButton')
    <div class="col-md-12 mt-3 mb-5">
        <a href="" class="text-decoration-none text-white">
            <img src="{{ asset('assets/images/accueil.png') }}" alt="" width="20%"> <br>
            <span>Home</span>
        </a>
    </div>

@section('walletbutton')
    <img src="{{ asset('assets/images/application-wallet-pass.png') }}" alt="" width="20%"><br>
    <span>Wallet</span>
@endsection


@endsection

@section('body')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            @yield('bodycontent')
        </div>
        <div class="col-md-4">
            @yield('sidecontent')

        </div>
    </div>
</div>
@endsection
