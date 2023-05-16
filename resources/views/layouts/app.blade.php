<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=fbc0c3bad927a2d2872c0a6b4fa56a4c">
    <link rel="stylesheet" href="/assets/css/Nunito.css?h=f93949b557d0c01e880d591bc120ac49">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="{{ route('welcome') }}">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tasks"></i></div>
                    <div class="sidebar-brand-text mx-3"><span><strong>&nbsp;Penta Value</strong><br><strong>&nbsp;Tasks
                                (1)</strong></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}"><i
                                class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        <p class="mb-0">Task List</p>
                    </div>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="collapse-1" href="#collapse-1" role="button"><i
                                    class="fas fa-cog"></i>&nbsp;<span>Twitter Task</span></a>
                            <div class="collapse" id="collapse-1">
                                <div class="bg-white border rounded py-2 collapse-inner">
                                    <h6 class="collapse-header">Main</h6><a class="collapse-item"
                                        href="{{ route('twitter.index') }}">Twitter Task</a>
                                    <h6 class="collapse-header">Sub functons Page List</h6>
                                    <a class="collapse-item"href="{{ route('twitter.toptweet') }}">Top 20 users List</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="collapse-2" href="#collapse-2" role="button"><i
                                    class="fas fa-cog"></i>&nbsp;<span>Front-End Task</span></a>
                            <div class="collapse" id="collapse-2">
                                <div class="bg-white border rounded py-2 collapse-inner">
                                    <h6 class="collapse-header">Main</h6><a class="collapse-item"
                                        href="{{ route('frontend.firebaseAuth') }}">Mobile&nbsp;verification</a><a
                                        class="collapse-item" href="{{ route('frontend.fileupload') }}">Image Uploader</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                    class="fas fa-cog"></i>&nbsp;<span>Hierarchical</span></a>
                            <div class="collapse" id="collapse-3">
                                <div class="bg-white border rounded py-2 collapse-inner">
                                    <h6 class="collapse-header">CUSTOM COMPONENTS:</h6><a class="collapse-item"
                                        href="{{ route('hierarchical.index') }}">Hierarchical Task</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="collapse-4" href="#collapse-4" role="button" style="min-width: 100%;"><i
                                    class="fas fa-cog"></i>&nbsp;<span>Queries Task</span></a>
                            <div class="collapse" id="collapse-4">
                                <div class="bg-white border rounded py-2 collapse-inner">
                                    <h6 class="collapse-header">MAin</h6><a class="collapse-item"
                                        href="{{ route('queries.index') }}">Queries Task</a>
                                    <h6 class="collapse-header">Sub Page</h6><a class="collapse-item"
                                        href="{{ route('accounts.add') }}">accounts</a><a class="collapse-item"
                                        href="{{ route('projects.add') }}">projects</a><a class="collapse-item"
                                        href="{{ route('jobs.add') }}">jobs</a><a class="collapse-item"
                                        href="{{ route('tasks.add') }}">tasks</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="{{ route('welcome') }}"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item dropdown no-arrow">

                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else

                            <li class="nav-item dropdown no-arrow">

                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown"
                                        href="{{ route('welcome') }}"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">{{ Auth::user()->name }}</span><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                            height="1em" fill="currentColor" class="fs-2 text-primary">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                            </path>
                                        </svg></a>


                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">

                                        <a class="dropdown-item" href="{{ route('welcome') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>


                                </div>
                            </li>
                            @endguest

                        </ul>
                    </div>
                </nav>
                <div id="app" class="container-fluid text-start text-primary d-xl-flex"
                    style="min-height: 100%;min-width: 100%;">
                    <div class="container">

                        @yield('content')

                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © 0x13v 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>
