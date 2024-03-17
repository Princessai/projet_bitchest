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

<body class=" d-flex flex-column">
    <div class="container   w-50 ">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('assets/images/bitchest_logo.png') }}" alt="" width="75%">
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12 bloc1 d-flex align-items-center justify-content-center  ">
                <div class="connexion d-flex justify-content-center align-items-center">
                    <form action="/login" method="POST"
                        class="d-flex align-items-center flex-column justify-content-evenly h-50 ">
                        @csrf
                        <h2 class="align-self-start mb-5">Log In</h2>
                        @session('message')
                            <div>
                                {{ $value }}
                            </div>
                        @endsession
                        {{-- @guest('customers')
                            The user is not authenticated
                        @endguest --}}
                        <label for="email" class=" align-self-start">Email</label>

                        @error('email')
                            {{ $message }}
                        @enderror
                        <input type="text" class="mt-3  w-100" name="email">
                        <label for="password" class="mt-3 align-self-start">Password</label>

                        @error('password')
                            {{ $message }}
                        @enderror
                        <input type="password" class="mt-3 w-100 " name="password">
                        <input type="submit" value="create" class="mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sections.footer')
</body>

</html>
