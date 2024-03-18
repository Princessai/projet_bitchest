<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<div class="loading " >
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
        window.addEventListener('load', function () {

            var loadingScreen = document.querySelector('.loading');

            loadingScreen.classList.add('loaded');

            setTimeout(function () {
                loadingScreen.style.display = 'none';
            }, 2000);
        });
    </script>

<style>
  
.loading{
  width: 100% ;
  height: 100%;
  position: fixed;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-image: linear-gradient(to bottom,#38618B,#1C3146);
  z-index: 99999; }
</style>


<body class=" ">
    <div class="container w-50 ">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" width="25%">
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12 bloc1 d-flex align-items-center justify-content-center ">
                <div class="connexion d-flex justify-content-center align-items-center">
                    <form action="/login" method="POST"
                        class="d-flex align-items-center flex-column justify-content-evenly h-50 ">
                        @csrf
                        <h2 class="align-self-center mb-5">Log In</h2>
                        @session('message')
                            <div>
                                {{ $value }}
                            </div>
                        @endsession
                        {{-- @guest('customers')
                            The user is not authenticated
                        @endguest --}}
                        <label for="email" class=" align-self-center">Email</label>

                        @error('email')
                            {{ $message }}
                        @enderror
                        <input type="text" class="mt-3  w-75" name="email">
                        <label for="password" class="mt-3  align-self-center">Password</label>
                        @error('password')
                            {{ $message }}
                        @enderror
                        <input type="password" class="mt-3 w-75 text-dark" name="password">
                        <input type="submit" value="Log in" class="mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sections.footer')
</body>

</html>
