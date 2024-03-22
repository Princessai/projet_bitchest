<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<div class="loading ">
    <style>
        .loading-wave {
            width: 300px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .loading-bar {
            width: 20px;
            height: 10px;
            margin: 0 5px;
            background-color: #01FF19;
            border-radius: 5px;
            animation: loading-wave-animation 1s ease-in-out infinite;
        }

        .loading-bar:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loading-bar:nth-child(3) {
            animation-delay: 0.2s;
        }

        .loading-bar:nth-child(4) {
            animation-delay: 0.3s;
        }

        @keyframes loading-wave-animation {
            0% {
                height: 10px;
            }

            50% {
                height: 50px;
            }

            100% {
                height: 10px;
            }
        }
    </style>
    <div class="loading-wave " style="align-self: center;">
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
    </div>

</div>


<script>
    window.addEventListener('load', function() {

        var loadingScreen = document.querySelector('.loading');

        loadingScreen.classList.add('loaded');

        setTimeout(function() {
            loadingScreen.style.display = 'none';
        }, 1000);
    });
</script>

<style>
    .loading {
        width: 100%;
        height: 100%;
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: linear-gradient(to bottom, #38618B, #1C3146);
        z-index: 99999;
    }
</style>


<body>

    <span class="opacity-0">aa</span>
    <div class="position-absolute top-0 start-50 translate-middle-x  d-flex justify-content-center ">
        <img src="{{ asset('assets/images/bitchest_logo.png') }}" class=" w-50" alt="">
    </div>
    <div class="position-absolute top-50 start-50 translate-middle ">
        <form class="form  shadow p-3 mb-5" action="/login" method="POST">
            @csrf
            <h2 class="form-title">Log in</h2>
            @session('message')
                <div>
                    {{ $value }}
                </div>
            @endsession
            {{-- @guest('customers')
                            The user is not authenticated
                        @endguest --}}

            <div class="input-container mb-3 d-flex justify-content-center">
                <input class="but-input w-75" placeholder="email" name="email" type="email">

                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="input-container d-flex mb-3 justify-content-center">
                <input class="but-input w-75 m-auto" placeholder=" password" name="password" type="password">
                <img src="{{ asset('assets/images/oeil.png') }}" height="20px" class="hidden-password" alt="">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <button class="submit but-login w-75 m-auto " value="Log in" type="submit">
                Sign in
            </button>


        </form>
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x"> @include('sections.footer') </div>

</body>

</html>


<script>

  let input = document.querySelector('.but-input');

  let showBtn = doxument.querySelector('hidden-passworrd');

  


</script>