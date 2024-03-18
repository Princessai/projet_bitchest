@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container w-50
 mt-3 profile shadow p-3 mb-5 rounded rounded text-center">
        <div class="row">
            <div class="col-md-12 d-flex flex-column  mt-3 ">
                <div>
                    <img src="{{ asset('assets/images/utilisateur.png') }}" width="20%" alt="">
                </div>
                <div class="text-light">

                    <p>Nom : <strong> {{ $customer->firstname }}</strong> </p>
                    <p>Prenom : <strong> {{ $customer->lastname }}</strong> </p>
                    <p>Age : <strong>{{ $customer->age }}</strong> </p>
                    <p>email: <strong>{{ $customer->email }}</strong> </p>


                </div>
            </div>
        </div>
    </div>
@endsection
