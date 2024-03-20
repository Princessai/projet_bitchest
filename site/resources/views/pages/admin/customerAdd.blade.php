@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container w-50
 mt-3 profile shadow p-3 mb-5 rounded rounded text-center">
        <div class="row">
            <div class="col-md-12 d-flex flex-column  mt-3  ">
                <h2 class="text-light">Add</h2>
                <form method="POST" action="{{ route('create.customer') }}">
                    @csrf

                    @if (session()->has('success') && session()->get('success') == true)
                        <div class="pop-up text-green border-radius-5 ">
                          <p>Customer added successfully !</p>
                          <p>Generated password : {{session()->get('generatedPassword')}} !</p>
                        </div>
                    @endif
                    <h6 class="text-light">
                        Customer </h6>

                    <div class="mb-3">

                        @error('firstname')
                            {{ $message }}
                        @enderror
                        <input type="text" id="TextInput" name="firstname" class="form-control" placeholder="firstname"
                            value="{{ old('firstname') }}">
                    </div>
                    <div class="mb-3">
                        @error('lastname')
                            {{ $message }}
                        @enderror
                        <input type="text" id="disabledTextInput" name="lastname" class="form-control"
                            placeholder="lastname" value="{{ old('lastname') }}">
                    </div>
                    <div class="mb-3">
                        @error('age')
                            {{ $message }}
                        @enderror
                        <input type="text" id="disabledTextInput" name="age" class="form-control" placeholder="age"
                            value="{{ old('age') }}">
                    </div>
                    <div class="mb-3">
                        @error('email')
                            {{ $message }}
                        @enderror

                        <input type="text" id="disabledTextInput" name="email" class="form-control" placeholder="email"
                            value="{{ old('email') }}">
                    </div>
                    <input type="submit" id="TextInput" class="form-control align-self-center" value="create">
                </form>
            </div>
        </div>
    </div>

@endsection

@php
   session()->forget(['success', 'generatedPassword']);
@endphp
