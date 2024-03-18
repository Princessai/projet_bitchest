<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/acceuil.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Bitchest</title>

</head>

<body>
    <div class="container header w-75 ">
        <div class="row mb-5 "> <!-- header -->
            <div class="col-12 mb-5 ">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container ">
                        <a class="navbar-brand me-auto" href="#"><img
                                src="{{ asset('assets/images/bitchest_logo.png') }}" width="155px" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse me-5" id="navbarText">
                            <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 d-flex w-100 justify-content-around">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#beneficts">
                                        <strong>Beneficts</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#tools"><strong>Tools</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#faq"> <strong>F.A.Q</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#"> <strong>About Us</strong></a>
                                </li>
                            </ul>
                            <span class="navbar-text ms-auto ">
                                <a href="/login"> <input type="submit" value="Log In">
                                </a>

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

                <input type="submit" value="Log in with Email">
            </div>
            <div class="col-md-5 mt-1 mb-5">
                <img src="{{ asset('assets/images/cryptomonnaie.png') }}" width="85%" alt="">
            </div>
        </div>



        <div class="row mt-5 getstarte"><!-- BENEFICTS -->
            <div class="col-md-5  ">
                <img src="{{ asset('assets/images/Prime.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-7 d-flex align-items-center justify-content-around " id="beneficts">
                <div>
                    <p class="buy  "> <strong>
                            Buy, sell and store hundreds <br>
                            of cryptocurrencies
                        </strong>
                    </p>
                    <p class="from ">
                        From Bitcoin to Dogecoin, we make it easy to buy and sell cryptocurrencies. <br>
                        Protect your cryptocurrencies with best-in-class <br>
                        cold storage capacity.
                    </p>
                    <input type="submit" value="See more">
                </div>


            </div>
        </div>



        <div class="row getstarte"><!-- TOOLS -->
            <div class="col-md-7 d-flex align-items-center justify-content-around " id="tools">
                <div>
                    <p class="buy  "> <strong>
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
                    <input type="submit" value="Trade">
                </div>

            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/Advanced.png') }}" width="100%" alt="">
            </div>
        </div>

        <div class="row getstarte" id="faq"><!-- FAQ -->
            <div class="col-md-12">
                <h1 class="text-light">F.A.Q</h1>
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong> What is the best trading site?</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Which site to learn trading? </strong>Bitchest: world leader in social trading
                                platforms
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong> why is bitchest the best site to use to learn trading?</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Because bitchest teaches you to better analyze the market, to help you learn a better
                                strategy to make the most profit possible depending on the market that interests you
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong> WHAT does Bitchest offer better than other platforms?</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bitchest gives you the cost values ​​according to each change that takes place. It
                                allows you to always be up to date whatever your geographical location, whether you are
                                going up or down, allowing you to always be ready.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <strong> Does Bitchest allow you to choose the best to choose whether it is forex or
                                    others??</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes with Bitchest you are not lost you know exactly where to go what to choose depending
                                on the gains you wish to acquire
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
