@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center mt-5">
                <img src="{{ asset('assets/images/user2.png') }}" class="shadoww__btn" alt="">
                <div>
                    <h3 class="ms-4 text-light">Update Customer : <strong>{{ $customer->firstname }}</strong> </h3>
                    <small class="ms-4 text-light opacity-75"></small>
                </div>
            </div>

            <div class="col-lg-12 mt-5 shadow p-3  mb-5 bg-body rounded">
                <form method="POST" action="{{ route('update.treatment') }}" class="d-flex flex-column">
                    @csrf
                    <h3><strong>Edit info</strong></h3>
                    <hr>
                    <input type="hidden" id="TextInput" name="id" class="form-control" value="{{ $customer->id }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Firstname</h5>
                        @error('firstname')
                            {{ $message }}
                        @enderror
                        <input type="text" class="form-control w-50" name="firstname" value="{{ $customer->firstname }}">
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Lastname</h5>
                        @error('lastname')
                            {{ $message }}
                        @enderror

                        <input type="text" class="form-control w-50" name="lastname" value="{{ $customer->lastname }}">
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Age</h5>
                        @error('age')
                            {{ $message }}
                        @enderror

                        <input type="number" class="form-control w-50" name="age" value="{{ $customer->age }}">
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Email</h5>
                        @error('email')
                            {{ $message }}
                        @enderror

                        <input type="email" class="form-control w-50" name="email" value="{{ $customer->email }}">
                    </div>

                    <input type="submit" class="form-control align-self-center w-25 but-update  mt-5 " value="update">
                </form>
            </div>
        </div>
    </div>
@endsection
