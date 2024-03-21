@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center mt-5">
                <img src="{{ asset('assets/images/cryptocurrency.png') }}" alt="">
            </div>

            <div class="col-lg-12 mt-5 shadow w-75 p-3  mb-5 bg-body rounded">
                <form method="POST" action="{{ route('createCrypto') }}" class="d-flex flex-column"
                    enctype="multipart/form-data">
                    @csrf
                    <h3><strong>Add crypto</strong></h3>
                    @session('message')
                        <div class="p-4 bg-green-100">
                            {{ $value }}
                        </div>
                    @endsession <div class="d-flex justify-content-between align-items-center">
                        <h5>Label</h5>
                        @error('label')
                            {{ $message }}
                        @enderror
                        <input type="text" class="form-control w-50" name="label" value="">
                    </div>

                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>logo</h5>
                        @error('logo')
                            {{ $message }}
                        @enderror
                        <input type="file" class="form-control w-50" name="logo">
                    </div>

                    <input type="submit" class=" align-self-center w-25 mt-5 " value="add">
                </form>
            </div>
        </div>
    </div>
@endsection
