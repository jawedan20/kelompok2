<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KRIDA - Admin Panel</title>

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
            <a class="sidenav-link" href="/evoting-admin">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span class="pl-3">E-Voting</span>
            </a>
            <a class="sidenav-link" href="/event-admin">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span class="pl-3">Event</span>
            </a>
            <a class="sidenav-link" href="/profile-admin">
                <i class="fas fa-fw fa-user fa-lg"></i>
                <span class="pl-3">Profile</span>
            </a>
        </div>
        <div class="bar-responsive fixed-bottom bg-primary d-none ">
            <a class="botnav-link" href="/admin">
                <i class="fas fa-fw fa-home fa-lg"></i>
                <span>Dashboard</span>
            </a>
            <a class="botnav-link" href="/evoting-admin">
                <i class="fas fa-fw fa-vote-yea fa-lg"></i>
                <span>E-Voting</span>
            </a>
            <a class="botnav-link" href="/event-admin">
                <i class="fas fa-fw fa-calendar fa-lg"></i>
                <span>Event</span>
            </a>
            <a class="botnav-link" href="/profile-admin">
                <i class="fas fa-fw fa-user fa-lg"></i>
                <span>Profile</span>
            </a>
        </div>
        <div class="div">
            <nav class="navbar navbar-transparent ">
                <div class="container-fluid">
                    <div class="navbar-brand d-flex align-items-center" href="#">
                        <h5 style="font-weight:700; color: #3f8fdd; cursor: default;">@yield('page')</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <a class="nav-link" id="notif" role="button" data-toggle="dropdown">
                                <div class="notif">
                                    <i class="far fa-bell">
                                    </i>
                                    <p class="badge-notif">1</p>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right text-muted shadow mr-4 notifications" aria-labelledby="notif">
                                <p class="text-center header-notif">NOTIFICATIONS</p>
                                <hr class="dropdown-divider">
                                <div class="body-notif d-flex justify-content-center">
                                    YOU DONT HAVE NOTIFICATIONS
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="nav-link d-flex" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
                                <span style="font-size: 1rem; ">{{ Auth::user()->name }}</span>
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
                    </div>
            </nav>
            <div class="container">
                {{ $slot }}
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>