@extends('base')


@section('walletbutton')
<a href="{{route('list.customers')}}">
    <img src="{{ asset('assets/images/customer_icon.png') }}" alt="" class="butside"><br>
    <span class="text-light">Customers</span>
</a>
@endsection


@section('profilebutton')
<a class="nav-link  align-self-center" href="{{route('dashboard.admin')}}" >
<img src="{{ asset('assets/images/user.png') }}" alt="">
</a>
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
