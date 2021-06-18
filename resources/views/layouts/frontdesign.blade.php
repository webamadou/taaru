<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} - @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/styles.css')}}" rel="stylesheet">
    <script src="{{mix('js/app.js')}}" defer></script>
</head>
<body>
    <div id="app">
        <div class="header-wrapper">
            <div class="container-fluid">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars fa-lg" aria-hidden="true" title="Toggle navigation" ></i>
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <div class="col-xs-12 col-sm-3 col-md-3 pl-5">
                    <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="" class="img-responsive logo"></a>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 menu-header flex justify-content-end pr-5">
                    <div class="hidden-xs col-sm-12 col-md-12 access-wrapper">
                        <ul id="access">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Se deconnecter</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Se connecter</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">S'enregistrer</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            <li>
                                <a href="cards"> *** </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-wrapper access-wrapper">
                    <div class="menu-mobile-toggles">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-user"></i></a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-list"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-mobile-container">
                        <ul id="access-mobile" class="">
                            <li><a href="/login">se connecter</a></li>
                        </ul>
                        <ul id="menu-mobile-categories" class="nav navbar active">
                            <li><a href="">menu link</a></li>
                            <li><a href="">menu link</a></li>
                            <li><a href="">menu link</a></li>
                            <li><a href="">menu link</a></li>
                            <li><a href="">menu link</a></li>
                            <li><a href="">menu link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- MAIN MENU -->
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="ccm-wrapper row">
            <h1 class="col-12 ccm-title">comment ça marche</h1>
            <div class="col-xs-12 col-sm-4">
                <div class="col-12 step">
                    <h2>1-découvrir</h2>
                    <p> Parcourez nos différentes offres et laissez vous inspirer </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="col-12 step">
                    <h2>2-profiter</h2>
                    <p> Choisissez une prestation et réservez un rendez-vous grâce au calendrier du salon </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="col-12 step">
                    <h2>1-économiser</h2>
                    <p> Rendez-vous à l'institut pour vous faire plaisir tout en economisant </p>
                </div>
            </div>
        </div>
        <div id="footer-wrapper">
            <div class="footer-menu">
                <h3>bea.dev</h3>
                <ul>
                    <li><a href="/pages/quisommesnous">Qui sommes-nous</a></li>
                    <li><a href="/pages/termesconditions">Termes et Conditons</a></li>
                    <li><a href="/contact">contact</a></li>
                    <li><a href="/pages/recrutement">bea recrute</a></li>
                    <li><a href="/blog" target="_blank">Blog</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <a href="https://www.facebook.com/bea.sn/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://twitter.com/bea" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.instagram.com/bea/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
