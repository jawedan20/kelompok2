<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    <!-- css navbar scroll pp -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <img class="Logosmk" src="{{ asset('img/LOGO SMKN 2.png') }}">
            </div>
            <div class="col-5 d-flex align-items-center">
                <div>
                    <h1 class="instansi">SMKN 2 SUKABUMI</h1>
                    <h2 class="detail-instansi">Mulia, Professional, dan Juara</h2>
                    <a class="learn btn btn-outline-primary" href="https://smkn2smi.sch.id/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="d-flex justify-content-around justify-content-center">
                <div class="eskul-link">
                    
                </div>
                <div class="eskul-link">
                  
                </div>
                <div class="eskul-link">
                
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>