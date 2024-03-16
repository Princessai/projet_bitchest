@extends('layouts.userDashboard')

@section('body')
<div>
    <div class="">
        <img src="{{asset('assets/images/bitcoin.png')}}" alt="">
         <h1>Bitcoin - BTC</h1> 
    </div>
</div>

<div class="d-flex ">

    <div class="maincontent col-md-7">

        <div class="courbeCrypto">
            
        </div>
    
        <div class="transactions">
            <p>
                text
            </p>
        </div>
    </div>
    
    <div class="sidecontent col-md-5">
        <div class="">
            <input type="number">
        </div>
        <div>
            <button>Buy</button>
            <button>Sell</button>
        </div>
    </div>
    
</div>

@endsection

