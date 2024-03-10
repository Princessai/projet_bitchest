<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/acceuil.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Bitchest</title>
 
</head>
<body >
<div class="container header w-75 ">
  <div class="row mb-5 " > <!-- header -->
    <div class="col-12 mb-5 ">
    <nav class="navbar navbar-expand-lg ">
  <div class="container ">
    <a class="navbar-brand me-auto" href="#"><img src="{{ asset('images/bitchest_logo.png') }}" width="155px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse me-5" id="navbarText">
      <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#beneficts"> <strong>Beneficts</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 text-light" href="#tools"><strong>Tools</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 text-light" href="#faq"> <strong>F.A.Q</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"> <strong>About Us</strong></a>
        </li>
      </ul>
      <span class="navbar-text ms-auto ">
     <button> <strong>Log in</strong></button>
      </span>
    </div>
  </div>
</nav>
    </div>
  </div>



  <div class="row getstarte  "><!-- GET STARTED -->
    <div class="col-md-7 mt-5">
      <p class="getstarted">
        <strong>
        GET STARTED IN <br>
        CRYPTO <br>
        WITH BITCHEST </strong>
      </p>
      <p class="signup">
      Sign up to get 500 EUR trading fee                       
      </p>
      <p class="follow">
      Follow the registration steps to redeem your rewards <br>
            and start your crypto journey with us! 
      </p>

      <button> <strong>Log in with Email</strong></button>
    </div>
    <div class="col-md-5 mt-1 mb-5">
      <img src="{{ asset('images/cryptomonnaie.png') }}" width="456px" alt="">
    </div>
  </div>



  <div class="row mt-5 getstarte"><!-- BENEFICTS -->
    <div class="col-md-5 mt-3">
      <img src="{{ asset('images/Prime.png') }}" width="543px" alt="">
    </div>
    <div class="col-md-7 " id="beneficts">
      <p class="buy powerful ms-5"> <strong>
          Buy, sell and store hundreds  <br>
    of cryptocurrencies
      </strong>
      </p>
      <p class="from ms-5">
      From Bitcoin to Dogecoin, we make it easy to buy and sell cryptocurrencies.  <br>
Protect your cryptocurrencies with best-in-class <br>
 cold storage capacity.
      </p>
      <button class=" ms-5"> <strong>See more</strong></button>
    </div>
  </div> 



   <div class="row getstarte"><!-- TOOLS -->
    <div class="col-md-7 " id="tools">
    <p class="buy powerful "> <strong>
    Powerful tools designed <br>
 for the experienced trader
      </strong>
      </p>
      <p class="from ">
      Powerful analysis tools secured by Coinbase offer you <br>
 unparalleled trading experience. Take advantage of sophisticated <br>
 sophisticated charting capabilities, real-time <br>
 order books and vast liquidity across hundreds of markets.
      </p>
      <button class=""> <strong>Trade</strong></button>
    </div>
    <div class="col-md-5">
    <img src="{{ asset('images/Advanced.png') }}" width="483px" alt="">
    </div>
  </div>

  <div class="row getstarte" id="faq"><!-- FAQ -->
    <div class="col-md-12">
      <h1 class="text-light">F.A.Q</h1>
      <div class="accordion mt-5" id="accordionExample">
  <div class="accordion-item mb-3">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <strong>  Where can I get some?</strong> 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item mb-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <strong>  Where can I get some?</strong> 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item mb-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <strong>  Where can I get some?</strong> 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item mb-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   <strong>  Where can I get some?</strong> 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>


@include('sections.footer') <!-- FOOTER -->
</body>
</html>