@extends('layouts.userDashboard')
@section('bodycontent')
<div class="container text-center">
  <div class="row">
    <div class="col-md-12 d-flex  flex-column mt-5 soldeAccount">
     <h6 class="text-light mt-3 align-self-start ">Portfolio Balance</h6>
     <h4 class="text-light align-self-start">10 .000 £</h4>

    </div>
    <div class="col-md-12 d-flex flex-column mt-5 soldeAccount">
    <h6 class="text-light mt-3 align-self-start ">My crypto</h6>
     <h4 class="text-light align-self-start">0 £</h4>
     <table class=" tableau">
  <thead>
    <tr >
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Total Balance</th>
      <th scope="col">Number</th>
     
    </tr>
     
  </thead>

  <tbody>

    <tr class="mb-5 mt-5">
      <th scope="row"> <img src="{{ asset('assets/images/bitcoin.png') }}" alt="" width="30%" ></th>
      <td>Bitcoin</td>
      <td>3000£</td>
      <td>3</td>
    </tr>
    
  </tbody>
</table>
    </div>
  </div>
</div>
@endsection
@section('sidecontent')
 <div class="container w-75 ">
 <div class="row ">
 <div class="col sideblock d-flex flex-column align-items-center justify-content-around mt-5">
  <img src="{{ asset('assets/images/bitcoin.png') }}" alt="" width="15%" alt="">
<input type="submit" value="Buy">
 </div>
 </div>
 </div>
@endsection