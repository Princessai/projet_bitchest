@extends('layouts.userDashboard')

@section('body')
    {{-- {{$cours}} --}}
    @php
        // dump($cours);
    @endphp

    {{-- {{ $cours}} --}}
    <div>
        <div class="">
            <img src="{{ asset('assets/images/bitcoin.png') }}" alt="">
            <h1>{{ $cryptoname }}</h1>
        </div>
    </div>

    <div class="d-flex ">

        <div class="maincontent col-md-7">

            <div class="courbeCrypto">
                <canvas id="myChart"></canvas>
            </div>

            <div class="transactions">
                <h3>Transactions</h3>
                <div>
                @if ($transactions->count()>0)

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
                                        <td> {{ $cryptoname }} </td>
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
                        You  don't have any transaction yet. Please add a new one to see it here!
                    </p>
                @endif
                </div>
            </div>
        </div>

        <div class="sidecontent col-md-5">

            @error('transaction_error')
                {{ $message }}
            @enderror

            <form action="/transaction/1?crypto_id={{ $crypto_id }}" method="POST">
                @csrf
                <div class="">
                    @error('qte')
                        {{ $message }}
                    @enderror
                    <div> Votre solde: {{$solde}} </div>
                    <input type="text" name="qte" value="{{ old('qte') }}">
                </div>
                <div>
                    <button type="submit" name="type" value="buy">Buy</button>
                    <button type="submit" name="type" value="sell">Sell</button>
                </div>

            </form>
        </div>

    </div>
@endsection

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
                    borderColor: "green",
                    backgroundColor: "red",
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
                        text: 'Cours actuel: {{ $cryptoname }}'
                    }
                }
            },
        };

        new Chart(ctx, config)
    </script>
@endpush
