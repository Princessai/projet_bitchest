@extends('layouts.userDashboard')
@section('bodycontent')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12 text-start mt-5 text-light">
                <h2 class="opacity-75 text-info">My Balance</h2>

                <h3 class="mt-3 ms-5 text-light"> {{ Auth::user()->wallet->solde }} € </h3>
            </div>
            <div class="col-md-12 text-start mt-5 text-light">
                <h2 class="mb-4 text-info">News</h2>

                <div class="card bg-transparent border-0  rounded mb-5" style="max-width: 1040px;">
                    <div class="row g-0 text-light">
                        <div class="col-lg-6 col-md-12 col-sm-12 border-0   ">
                            <img src="{{ asset('assets/images/elon-musk.jpg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class=" col-lg-6 col-md-12 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-info">ELON MUSK & BITCOIN</h5>
                                <p class="card-text text-light">Tesla a investi 1,5 milliard de dollars dans le bitcoin et
                                    prévoit d'accepter la devise virtuelle
                                    comme moyen de paiement pour ses voitures, Il suffit donc en théorie d'un seul bitcoin
                                    pour acheter la
                                    voiture Model Y de Tesla, un 4 x 4 de ville (SUV), vendue au prix de base de 41.990
                                    dollars sans crédit d'impôt.</p>
                                <p class="card-text"><small>
                                        <a
                                            href="https://www.futura-sciences.com/tech/actualites/technologie-elon-musk-investit-15-milliard-dollars-bitcoin-85625/"><button
                                                class="shadow__btn">See All</button> </a>
                                    </small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-transparent border-0 mb-5" style="max-width: 1040px;">
                    <div class="row g-0 text-light">
                        <div class="col-lg-6 col-md-12 col-sm-12 border-0 ">
                            <img src="{{ asset('assets/images/shib-coins.jpeg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-info">SHIBA COIN</h5>
                                <p class="card-text text-light">Dans le monde fascinant et parfois imprévisible des
                                    cryptomonnaies, Shiba Inu (SHIB)
                                    fait parler de lui. Malgré ses efforts pour se frayer un chemin au-delà du seuil de
                                    0,000008 $, le vent ne
                                    semble pas tourner en sa faveur depuis le début de l’année. Pourtant, une lueur d’espoir
                                    brille à l’horizon grâce aux prévisions d’une […]</p>

                                <p class="card-text"><small>
                                        <a
                                            href="https://fr.investing.com/news/cryptocurrency-news/shiba-inu-shib--cette-ia-avancee-predit-quand-sa-valeur-sera-de-09-et-ce-serait-pour-bientot-2312916"><button
                                                class="shadow__btn">See All</button> </a>
                                    </small></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card bg-transparent border-0 mb-3" style="max-width: 1040px;">
                    <div class="row g-0 text-light">
                        <div class="col-lg-6 col-md-12 col-sm-12 border-0  ">
                            <img src="{{ asset('assets/images/solana-info.jpeg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-info">SOLANA INCREASING</h5>
                                <p class="card-text text-light">The token behind Solana, a layer-1 blockchain that’s
                                    competitive with the Ethereum blockchain, has been through the wringer after it
                                    plummeted from a high of about $260 in late 2021 to a low around $8 in early 2023.
                                    But like every good movie with a character redemption arc, Solana has one too.</p>

                                <p class="card-text"><small>
                                        <a
                                            href="https://techcrunch.com/2024/03/13/solanas-price-rises-to-160-highest-level-since-january-2022-as-memecoin-mania-rises/"><button
                                                class="shadow__btn">See All</button> </a>
                                    </small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('sidecontent')
    <div class="container text-start">
        <div class="row">
            <div class="col-md-12 d-flex flex-column  mt-4">
                <div class="d-flex justify-content-around">
                    <h4 class="ms-4 text-info">Top Movers</h4>
                    <a href="{{route('list.crypto.customer')}}"><button class="shadow__btn">See All</button> </a>
                </div>

                <div class=" w-100 mt-5 align-self-center  shadow p-1 mb-5 bg-body rounded ">
                    <table class=" table align-middle  mb-5 mb-0 ">
                        <thead class="text-light fs-4">

                        </thead>
                        <tbody class="rounded">
                          @foreach ($cryptos as $crypto)

                          <tr class=" ">
                            <td class="  border-bottom-0">
                                <h6 class="fw-semibold mb-0"> <img src="{{ asset("storage/img/$crypto->image") }}"
                                        alt="" class=" "></h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold fz-5 mb-1">{{ $crypto->label }} </h6>

                            </td>
                            <td class="border-bottom-0 ">
                                <p class="mb-0 fw-normal">{{$crypto->cotations()->latest( 'date' )->first()->cours_actuel}} $</p>
                            </td>

                        </tr>

                          @endforeach

                            {{-- <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/ethereum.png') }}"
                                            class=" mb-3" alt=""></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Ethereum</h6>

                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-2">10 000 $</p>
                                </td>

                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/cardano.png') }}"
                                            alt=""></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Cardano</h6>

                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">10 000 $</p>
                                </td>

                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/nem.png') }}"
                                            alt=""></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Nem</h6>

                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">10 000 $</p>
                                </td>

                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/litecoin.png') }}"
                                            alt=""></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Litecoin</h6>

                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">10 000 $</p>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
