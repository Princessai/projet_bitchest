@extends('base')


@section('walletbutton')
    <img src="{{ asset('assets/images/customer_icon.png') }}" alt="" ><br>
    <span>Customers</span>
@endsection

@section('body')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                @yield('bodycontent')
            </div>
        </div>
    </div>
@endsection
