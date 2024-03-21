@extends('layouts.userDashboard')
@section('bodycontent')
    <div class=" text-center">
        <div class="row">
            <div class="col-md-12 d-flex  flex-column mt-5 soldeAccount">
                <h6 class=" mt-3 align-self-start text-info ">Portfolio Balance</h6>
                <h4 class="text-light align-self-start text-light">
                    {{ $customer->wallet->solde }} €

                </h4>

            </div>
            <div class="col-md-12 d-flex flex-column mt-5 soldeAccount">
                <h6 class=" mt-3 align-self-start text-info ">My crypto</h6>
                <h4 class="text-light align-self-start text-light">{{ $couts_totaux }} €</h4>
                <div class="shadow p-3 mb-5 bg-body rounded me-5 ">
                    @if (!$isWalletEmpty)
                        <table class=" table align-middle  mb-5 mb-0 ">
                            <thead class="text-light fs-4">
                                <tr>

                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Current course</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Quantity</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Purchased value</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Added value</h6>
                                    </th>

                                    <th>

                                    </th>

                                </tr>
                            </thead>
                            <tbody class="rounded">
                                @foreach ($cryptosInfos as $cryptoInfo)
                                    <tr class="">
                                        <td class="  border-bottom-0">
                                            <h6 class="fw-semibold mb-0"> <img
                                                    src="{{ asset('assets/images/Bitcoin.png') }}" alt=""
                                                    class=" "></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold fz-5 mb-1">{{ $cryptoInfo['label'] }}</h6>

                                        </td>
                                        <td class="border-bottom-0 ">
                                            <p class="mb-0 fw-normal">{{ $cryptoInfo['cout_total'] }} €</p>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <p class="mb-0 fw-normal">{{ $cryptoInfo['qte_crypto'] }} </p>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <p class="mb-0 fw-normal">{{ $cryptoInfo['valeur_achat'] }} €</p>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <p class="mb-0 fw-normal">{{ number_format($cryptoInfo['plusValue'], 3) }} €</p>
                                        </td>

                                        <td>
                                            <a href="{{ route('cours.crypto.customer', $cryptoInfo['id']) }}"><button
                                                    class="shadoww__btn">sell</button> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>You do not have any cryptocurrency !</p>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection


@section('sidecontent')
    <div class="container text-center wallet-profile mt-5 ">
        <div class="row">
            <div class="col mt-5 ">
                <div><img src="{{ asset('assets/images/user2.png') }}" alt="" class="shadoww__btn"></div>
                <div class="text-light mt-4 ">
                    <h4>
                        welcome <strong>
                            @auth
                                {{ $customer->firstname }} {{ $customer->lastname }}
                            @endauth
                    </h4>

                    </strong>
                </div>
                <div class="mt-4"><a href="{{ route('profil.customer') }}"><button class="shadoww__btn">MY
                            PROFILE</button> </a></div>
                <div class="mt-4"> <a href=""><button class="shadoww__btn">MY TRANSACTIONS</button> </a> </div>


            </div>
        @endsection
