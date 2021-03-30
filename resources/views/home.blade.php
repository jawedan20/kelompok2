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

</head>

<body>
    <!-- css navbar scroll pp -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link btn btn-primary" href="{{ route('login') }}">Login</a>
                    <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="main">
            <div class="mr-5">
                <img class="Logosmk" src="{{ asset('img/LOGO SMKN 2.png') }}">
            </div>
            <div class="ml-5 d-flex align-items-center">
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
                <div class="eskul-link ">
                    <img src=" {{ asset('img/pramuka.png') }}" width="180px" height="180px" alt="Tunas Kelapa">
                    <p class="eskul">PRAMUKA</p>
                </div>
                <div class="eskul-link">
                    <img src="{{ asset('img/pmr.png') }}" width="150px" height="160px" alt="Tunas Kelapa">
                    <p class="eskul pt-3 mb-3">PMR</p>
                </div>
                <div class="eskul-link">
                    <img src="{{ asset('img/paskibra.png') }}" width="200px" height="150px" alt="Tunas Kelapa">
                    <p class="eskul pt-4">PASKIBRA</p>
                </div>
            </div>

            <div class="detail">
                <h2>PRAMUKA</h2>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>