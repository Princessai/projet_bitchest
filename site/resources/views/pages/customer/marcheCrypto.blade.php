@extends('layouts.userDashboard')

@section('bodycontent')
@php
include(base_path('documents/utils.php'))
    
@endphp

<h5 class=" mt-3 text-info  ms-4  fw-semibold mb-4">BUY & SELL</h5>
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
@endsection
