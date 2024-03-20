@extends('layouts.adminDashboard')

@section('bodycontent')
          <div class="container">
            <div class="row">
            <div class="col-lg-12 d-flex align-items-center mt-5">
    <img src="{{ asset('assets/images/user2.png') }}" class="shadoww__btn" alt="" >
        <div><h3 class="ms-4 text-light">Welcome <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong>  </h3>
              <small class="ms-4 text-light opacity-75">{{Auth::user()->email}}</small>
      </div>
            </div >
            <div class="col-lg-12 d-flex align-items-start">
            <div class="mt-4"><a href=""><button class="shadoww__btn">MY PROFILE</button> </a></div>
           </div>

    <div class="col-lg-12 mt-5 shadow p-3 mb-5 bg-body rounded">
      <h3><strong>Personal info</strong></h3>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Firstname</h5><h5 class="me-4">{{Auth::user()->firstname}} </h5></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Lastname</h5><h5 class="me-4">{{Auth::user()->lastname}}</h5></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Email</h5><h5 class="me-4">{{Auth::user()->email}}</h5></div>
      <hr>
      <div class="d-flex justify-content-between align-items-center"><h5>Password</h5>  <input type="password" disabled  class="form-control w-50" name="password" value="{{Auth::user()->password}}" ></div>
    </div>
    <div class="col-lg-12 mb-5">
  <div class="accordion accordion-flush " id="accordionFlushExample">
  <div class="accordion-item ">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
     <strong> Edit your profile</strong> 
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <form method="POST" action="{{route('updateselfadmin')}}">
       @csrf
      <div class="accordion-body">
      <input type="hidden" class="form-control" name="id" value="{{Auth::user()->id}}" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lastname" value="{{Auth::user()->lastname}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="{{Auth::user()->password}}" >
  </div>

  <input type="submit" id="TextInput" class="form-control shadoww__btn align-self-center" value="Edit">
  

</form> 
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
            </div>
          </div>
         


@endsection