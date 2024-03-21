@extends('layouts.userDashboard')

@section('bodycontent')

<div class="container mt-5 text-center">
        <div class="row">
            <div class="col-md-12 d-flex  align-items-center ">
                <img src="{{ asset("storage/img/$crypto->image") }}" class="me-5" width="5%" alt="">
                <h1 class="text-light">{{ $crypto->label }}</h1>
            </div>
            <div class=" col-md-12 mt-5 mb-4  d-flex">
                <h3><button class="shadoww__btn">Overview</button></h3>
            </div>
            <div class="col-md-12 shadow-sm p-3 mb-5 bg-dark rounded">
                <div class="courbeCrypto">
                    <canvas id="myChart"></canvas>
                </div>

            </div>
            @can('do_transaction')
                <div class="col-md-12 bg-body bg-gradient text-dark shadow-sm p-3 mb-5 rounded  ">
                    <h3>Transactions</h3>

                    <div class=" ">
                        @if ($transactions->count() > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th>Crypto</th>
                                        <th>Purchased rate</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>amount</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td> {{ $crypto->label }} </td>
                                            <td> {{ $transaction->cours_achat }} </td>
                                            <td> {{ $transaction->type }} </td>
                                            <td> {{ $transaction->date }} </td>
                                            <td> {{ $transaction->quantite }} </td>
                                            <td> {{ $transaction->montant }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>



                            </table>
                        @else
                            <p>
                                You don't have any transaction yet. Please add a new one to see it here!
                            </p>
                        @endif
                    </div>
                </div>
            @endcan


        </div>

    </div>
@endsection


@can('do_transaction')
    @section('sidecontent')
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 mt-5">

                    <form action="{{ route('transaction', ['crypto_id' => $crypto_id]) }}" method="POST">
                        @csrf
                        <div class="">
                            <div>
                                <h5 class="text-light"> Votre solde: {{ $solde }} €</h5>
                            </div>

                            @error('qte')
                             <div class="text-light px-5 bg-danger bg-gradient shadow p-3 mb-2 mt-2  rounded ">
                           <strong> {{ $message }} </strong>   </div>   
                            @enderror
                            <input type="text" class="cleaninput mt-4" name="qte" value="{{ old('qte') }}">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="shadoww__btn" name="type" value="buy">Buy</button>
                            <button type="submit" class="shadoww__btn" name="type" value="sell">Sell</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection

@endcan






@push('chart-scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@push('scripts')
    <script>
        let cours = JSON.parse("{{ $cours }}");
        let dates = JSON.parse('{!! $dates !!}');
        console.log(cours);
        console.log(dates)

        const ctx = document.getElementById('myChart');


        const data = {
            labels: dates,
            datasets: [{
                    label: 'Dataset 1',
                    data: cours,
                    borderColor: "#01FF19",
                    backgroundColor: "#01FF19",
                },

            ]
        }

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cours actuel: {{ $crypto->label }}'
                    }
                }
            },
        };

        new Chart(ctx, config)
    </script>
@endpush
