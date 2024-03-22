@php
$isAdmin = Auth::user()->isAdmin();

// dd(Auth::user());
$updateself = route('updateself.customer');

if ($isAdmin) {
$updateself = route('updateself.admin');
}
@endphp

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
                        <img src="{{ asset('assets/images/user2.png') }}" class="shadoww__btn" alt="">
                        <div>
                            <h3 class="ms-4 text-light">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                            <small class="ms-4 text-light opacity-75">{{ Auth::user()->email }}</small>
                        </div>

                    </div>
                    <div class="col-lg-12 mt-5 shadow p-3 mb-5 bg-body rounded">
                        <h3><strong>Personal info</strong></h3>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Firstname</h5>
                            <h5 class="me-4">{{ Auth::user()->firstname }} </h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Lastname</h5>
                            <h5 class="me-4">{{ Auth::user()->lastname }}</h5>
                        </div>
                        <hr>
                        @can('do_transaction')
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>age</h5>
                            <h5 class="me-4">{{ Auth::user()->age }}</h5>
                        </div>
                        <hr>
                        @endcan
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Email</h5>
                            <h5 class="me-4">{{ Auth::user()->email }}</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Password</h5> <input type="password" disabled class="form-control w-25" name="password" value="{{ Auth::user()->password }}">
                        </div>
                    </div>
                </div>

                <!-- edit your profile -->

                <div class="col-lg-12 mb-5">
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button btn-52 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="original">Edit Your Profile</div>
                                    <div class="letters">

                                        <span>E</span>
                                        <span>D</span>
                                        <span>I</span>
                                        <span>T</span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <form method="POST" action="{{ route('updateself.customer') }}">
                                        @csrf
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Firstname</label>
                                                <input type="text" class="form-control" name="firstname" value="{{ Auth::user()->firstname }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Lastname</label>
                                                <input type="text" class="form-control" name="lastname" value="{{ Auth::user()->lastname }}">
                                            </div>
                                            @can('do_transaction')
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                                <input type="number" class="form-control" name="age" value="{{ Auth::user()->age }}">
                                            </div>
                                            @endcan
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label"> Password</label>
                                                <input type="text" class="form-control" name="password" value="">
                                            </div>
                                            <input type="submit" id="TextInput" class="form-control shadoww__btn align-self-center" value="Edit">
                                    </form>
                                </div>
                            </div>







                            <!-- change your password -->

                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button btn-53 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <div class="original">Change your Password</div>
                                        <div class="letters">

                                            <span>C</span>
                                            <span>H</span>
                                            <span>A</span>
                                            <span>N</span class="me-2">
                                            <span>G</span class="me-2">
                                            <span>E</span class="me-2">


                                        </div>

                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label"> Password</label>
                                            <input type="text" class="form-control" name="password" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label"> new Password</label>
                                            <input type="text" class="form-control" name="new-password" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">confirm Password</label>
                                            <input type="text" class="form-control" name="confirm-new-password" value="">
                                        </div>

                                        <input type="submit" id="TextInput" class="form-control shadoww__btn align-self-center" value="Edit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection