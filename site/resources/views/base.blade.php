<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/wallet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cours.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/marche.css') }}" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     @stack('chart-scripts')

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
            }, 1000);
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


<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 col-lg-2 col-sm-3">
      @include('sections.sidebar')
    </div>
    <div class="col-md-10  px-0 col-lg-10 col-sm-9">
        @include('sections.headerDashboard')
      @yield('body')
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
@stack('scripts')
</html>