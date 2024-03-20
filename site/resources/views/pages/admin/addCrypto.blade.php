@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container">
            <div class="row">
            <div class="col-lg-12 d-flex justify-content-center mt-5">
    <img src="{{ asset('assets/images/cryptocurrency.png') }}"  alt="" >
            </div >

    <div class="col-lg-12 mt-5 shadow p-3  mb-5 bg-body rounded">
        <form method="POST" action="" class="d-flex flex-column" >
        @csrf
      <h3><strong>Add crypto</strong></h3>
      <hr>
      <input type="hidden" id="TextInput" name="id"  class="form-control" value="">
      <div class="d-flex justify-content-between align-items-center"><h5>Firstname</h5>  <input type="text"   class="form-control w-50"  name="firstname" value="" ></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Lastname</h5>  <input type="text"   class="form-control w-50" name="lastname"  value="" ></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Age</h5>  <input type="number"   class="form-control w-50" name="age" value="" ></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Email</h5>  <input type="email"   class="form-control w-50" name="email" value="" ></div>

        <input type="submit"  class=" align-self-center w-25   mt-5 " value="add">
    </form>
    </div>
 </div>
</div>
@endsection