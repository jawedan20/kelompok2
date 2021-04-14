<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krida</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03c8d5d9a1.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- css navbar scroll pp -->
    <nav class="navbar navbar-expand-sm bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link btn btn-primary mr-1" href="{{ route('login') }}">Login</a>
                    <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="ab row justify-content-center align-items-center">
            <div class="col-xl-4 logo">
                <img class="Logosmk" src="{{ asset('img/LOGO SMKN 2.png') }}">
            </div>
            <div class="txt col-xl-5">
                <h1 class="instansi">SMKN 2 SUKABUMI</h1>
                <h2 class="detail-instansi">Mulia, Professional, dan Juara</h2>
                <a class="learn btn btn-outline-primary" href="https://smkn2smi.sch.id/">Learn More</a>
            </div>
        </div>
    </div>
    <div class="content py-5">
        <div class="container py-5 my-3">
            <div class="row justify-content-around align-items-center">
                <img class="col-xl-4 col-md-12 img-svg" src="{{asset('img/pages.svg')}}" width="70%" alt="Svg">
                <div class="col-xl-5 col-md-12 text">
                    <h3 class="text-primary font-weight-light mb-4">About</h3>
                    <p>Krida adalah Sebuah Aplikasi web yang dibuat untuk mempermudah Stackholder sekolah serta aktivis eskul untuk mengelola suatu eskul </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tenetur sed possimus deleniti, voluptatibus quae dolorem quidem perferendis sapiente ullam rerum unde esse?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer shadow py-4">
        <div class="container">
            <div class="row justify-content-center my-2 mt-4">
                <a class="footer-link" href=""><i class="text-white fab fa-facebook"></i></a>
                <a class="footer-link" href=""><i class="text-white fab fa-github"></i></a>
                <a class="footer-link" href=""><i class="text-white fab fa-instagram"></i></a>
            </div>
            <div style="font-size: 0.6rem;" class="row justify-content-center h6">
                &copy; 2021 Krida, Jelajahi, Pelajari
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>