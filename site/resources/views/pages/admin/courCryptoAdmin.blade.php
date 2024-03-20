@extends('base')
@section('walletbutton')
<a href="{{route('list.customers')}}">
    <img src="{{ asset('assets/images/customer_icon.png') }}" alt="" class="butside"><br>
    <span class="text-light">Customers</span>
</a>
@endsection


@section('profilebutton')
<a class="nav-link  align-self-center" href="{{route('dashboard.admin')}}">
    <img src="{{ asset('assets/images/user.png') }}" alt="">
</a>
@endsection

@section('body')
{{-- {{$cours}} --}}
@php
// dump($cours);
@endphp

{{-- {{ $cours}} --}}

<div class="container text-center">
    <div class="row">
        <div class="col-md-12 d-flex mt-5">
            <img src="{{ asset('assets/images/bitcoin.png') }}" class="me-5" width="5%" alt="">
            <h1 class="text-light">{{ $cryptoname }}</h1>
        </div>
        <div class=" col-md-12 mt-5 mb-4  d-flex">
            <h3><button class="shadoww__btn">Overview</button></h3>
        </div>
        <div class="col-md-10 mx-3 shadow-sm p-3 mb-5 bg-dark  rounded">
            <canvas id="myChart"></canvas>
        </div>

        <div class="col-md-10">
            <small></small>
            <p class="text-light text-start shadow p-3 mb-5  rounded">
                About Bitcoin
          <br>  <br> <strong> What is Bitcoin?</strong>  <br> <br>
          Bitcoin (BTC) is a decentralized cryptocurrency that was first described in a 2008 whitepaper by an individual or group of individuals using the alias Satoshi Nakamoto. Officially launched in January 2009, Bitcoin is a peer-to-peer online currency that allows transactions to happen directly between equal and independent network participants without the need for any intermediary. Bitcoin is digital money that cannot be inflated or manipulated by any individual, company, government, or central bank. Bitcoin is recognized as one of the initial cryptocurrencies to come into use and has inspired the development of thousands of competing projects. There will only ever be 21 million BTC. Bitcoin is highly divisible, with its smallest unit, i.e. 0.000 000 01 BTC, called a "satoshi" or "sat." As bitcoin's value has risen, its easy divisibility has become a key attribute.   
          <br>    <strong> How does Bitcoin work?</strong>  <br> <br>
            Bitcoin's key innovation was the blockchain — a piece of software that acts like a ledger, logging every transaction ever made using Bitcoin. Unlike a bank's ledger, the Bitcoin blockchain is distributed and verified across a network of computers, meaning that no company, country, or third party is in control of it, and anyone can become part of that network. The process by which new bitcoins are entered into circulation involves solving computationally difficult puzzles to discover a new block, which is added to the blockchain. The individuals who present their solution to the puzzle first are compensated with a certain number of bitcoins. Finally, anyone, anywhere, with Internet access, can receive, send, and hold Bitcoin using the public version of their key (i.e., the version of their private key that can be freely shared in order to securely receive funds).  

         <br>  <br>  <strong>  What are the potential use cases for Bitcoin?</strong>  <br> <br>
                One of Bitcoin's advantages comes from the fact that it was one of the initial cryptocurrencies to appear on the market. It has managed to create a global community and give birth to a new industry of millions of enthusiasts who create and use Bitcoin and other cryptocurrencies in their everyday lives. Bitcoin is often referred to as digital gold due to its potential for long-term utility. It is also used as a decentralized medium of exchange, providing for ownership rights as a physical asset or as a unit of accoun <br>
            </p>
        </div>
    </div>
</div>

</div>
</div>
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