
@extends('base')
@section('profilebutton')
<img src="{{ asset('assets/images/user.png') }}" alt="">
@endsection
@section('body')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
               
            <div class="container text-start">
  <div class="row">
    <div class="col-lg-12 text-light mt-4">
      <h3>Profile</h3>
    </div>
    <div class="col-lg-12 d-flex align-items-center mt-5">
    <img src="{{ asset('assets/images/user2.png') }}" class="shadoww__btn" alt="" >
        <div><h3 class="ms-4 text-light">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
              <small class="ms-4 text-light opacity-75">{{Auth::user()->email}}</small>
      </div>
    
    </div>
    <div class="col-lg-12 mt-5 shadow p-3 mb-5 bg-body rounded">
      <h3><strong>Transaction</strong></h3>
      <hr>
      <div class="d-flex justify-content-between align-items-center"></div>
      <hr>
    </div>
  </div>
  
  </div>
</div>
  </div>
        </div>
    </div>
@endsection
