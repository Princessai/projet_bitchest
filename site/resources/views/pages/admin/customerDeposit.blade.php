@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container">
            <div class="row">
            <div class="col-lg-12 d-flex align-items-center mt-5">
    <img src="{{ asset('assets/images/user2.png') }}" class="shadoww__btn" alt="" >
        <div><h3 class="ms-4 text-light">Customer : <strong>{{ $customer->firstname }}</strong>  </h3>
              <small class="ms-4 text-light opacity-75"></small>
      </div>
            </div >

    <div class="col-lg-12 mt-5 shadow p-3  mb-5 bg-body rounded">
        <form method="POST" action="" class="d-flex flex-column" >
        @csrf
      <h3><strong>Deposit</strong></h3>
      <hr>
      <input type="hidden" id="TextInput" name="id"  class="form-control" value="{{ $customer->id }}">
      <div class="d-flex justify-content-between align-items-center"><h5>Amount</h5>  <input type="text"   class="form-control w-50"  name="solde" value="" ></div>
      <hr>
        <input type="submit"  class="form-control align-self-center w-25 but-update  mt-5 " value="Deposite">
    </form>
    </div>
 </div>
</div>
@endsection