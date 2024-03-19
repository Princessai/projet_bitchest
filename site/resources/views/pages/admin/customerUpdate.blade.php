@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container w-50
 mt-3 profile shadow p-3 mb-5 rounded rounded text-center">
        <div class="row">
            <div class="col-md-12 d-flex flex-column  mt-3  ">
                <h2 class="text-light">Update</h2>
                <form method="POST" action="/update/traitement">
                    @csrf

                    <h6 class="text-light">Customer : {{ $customer->firstname }}</h6>
                    <input type="text" id="TextInput" name="id" style="display: none;" class="form-control"
                        value="{{ $customer->id }}">
                    <div class="mb-3">
                        <input type="text" id="TextInput" name="firstname" class="form-control"
                            value="{{ $customer->firstname }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="TextInput" name="lastname" class="form-control"
                            value="{{ $customer->lastname }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="TextInput" name="age" class="form-control"
                            value="{{ $customer->age }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="TextInput" name="email" class="form-control"
                            value="{{ $customer->email }}">
                    </div>
                    <input type="submit" id="TextInput" class="form-control align-self-center" value="update">
                </form>
            </div>
        </div>
    </div>
@endsection
