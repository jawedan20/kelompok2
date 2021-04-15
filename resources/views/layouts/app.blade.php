<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03c8d5d9a1.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('style')
    @livewireStyles
</head>

<body>
    <div class="all">
        @if(Auth::user()->role == "admin")
        <div class="navbar-nav sidebar">
            <div class="sidebar-brand" href="index.html">
                <h1>
                    KRIDA
                </h1>
                <span class="text-secondary">Admin</span>
            </div>
            <a class="sidenav-link" href="/admin">
                <i class="fas fa-fw fa-home fa-lg"></i>
                <span class="pl-3">Dashboard</span>
            </a>
            <a class="sidenav-link" href="/admin/evoting">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span class="pl-3">E-Voting</span>
            </a>
            <a class="sidenav-link" href="/admin/event">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span class="pl-3">Event</span>
            </a>
        </div>
        <div class="bar-responsive fixed-bottom bg-primary d-none ">
            <a class="botnav-link" href="/admin">
                <i class="fas fa-fw fa-home fa-lg"></i>
                <span>Dashboard</span>
            </a>
            <a class="botnav-link" href="/admin/evoting">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span>E-Voting</span>
            </a>
            <a class="botnav-link" href="/admin/event">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span>Event</span>
            </a>
        </div>
        @else
        <div class="navbar-nav sidebar">
            <div class="sidebar-brand" href="index.html">
                <h1>
                    KRIDA
                </h1>
            </div>
            <a class="sidenav-link" href="/dashboard">
                <i class="fas fa-fw fa-home fa-lg"></i>
                <span class="pl-3">Dashboard</span>
            </a>
            <a class="sidenav-link" href="/evoting">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span class="pl-3">E-Voting</span>
            </a>
            <a class="sidenav-link" href="/event">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span class="pl-3">Event</span>
            </a>
            <a class="sidenav-link" href="/profile">
                <i class="fas fa-fw fa-user fa-lg"></i>
                <span class="pl-3">Profile</span>
            </a>
        </div>
        <div class="bar-responsive fixed-bottom bg-primary d-none ">
            <a class="botnav-link" href="/dashboard">
                <i class="fas fa-fw fa-home fa-lg"></i>
                <span>Dashboard</span>
            </a>
            <a class="botnav-link" href="/evoting">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span>E-Voting</span>
            </a>
            <a class="botnav-link" href="/event">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span>Event</span>
            </a>
            <a class="botnav-link" href="/profile">
                <i class="fas fa-fw fa-user fa-lg"></i>
                <span>Profile</span>
            </a>
        </div>
        @endif
        <div class="div">
            <nav class="navbar navbar-transparent mb-4 ">
                <div class="container-fluid">
                    <div class="navbar-brand" href="#">
                        <h5 style="font-weight:700; color: #3f8fdd; cursor: default;">@yield('page')</h5>
                    </div>
                    <div class="d-flex">
                        <a style="font-size: 0.8rem; " class="nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow mr-4 " aria-labelledby="userDropdown">
                            <div class="dropdown-item user">
                                <p class="name">{{ Auth::user()->name }}</p>
                                <p class="email">{{ Auth::user()->email }}</p>
                            </div>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
            </nav>
            <div class="container">
                {{ $slot }}
            </div>
        </div>

    </div>
    @livewireScripts
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>