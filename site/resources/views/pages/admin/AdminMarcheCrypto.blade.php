
@extends('base')

@section('walletbutton')
<a href="{{route('list.customers')}}">
    <img src="{{ asset('assets/images/customer_icon.png') }}" alt="" class="butside"><br>
    <span class="text-light">Customers</span>
</a>
@endsection



@section('profilebutton')
<a class="nav-link  align-self-center" href="{{route('dashboard.admin')}}" >
<img src="{{ asset('assets/images/user.png') }}" alt="">
</a>
@endsection




@section('body')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
            @php
include(base_path('documents/utils.php'))
    
@endphp
<div class="d-flex flex-column">
<h3 class=" mt-3 text-light text-start   ms-2  fw-semibold mb-4">List Crypto</h3>
<a href="{{route('addcrypto')}}" class="align-self-start"><button class="shadoww__btn mb-5 ">Add Crypto</button></a>
</div>


    <div class="table-responsive rounded shadow p-3 mb-5 bg-body  rounded ">
        <table class="table text-nowrap   mb-5 mb-0 align-middle">
            <thead class="text-light fs-4">
                <tr>

                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">current Course</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cryptos as $crypto)
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"> <img src="{{ asset('assets/images/Bitcoin.png') }}" alt=""
                                    width="40%"></h6>
                        </td>
                        <td class="border-bottom-0">

                            <h6 class="fw-semibold mb-1">{{ $crypto->label }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ getCoursActuel($crypto->id) }} €</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{route('cours.crypto', ['crypto_id'=>$crypto->id])}}"><button class="shadoww__btn">see more</button></a>
                               </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
@endsection