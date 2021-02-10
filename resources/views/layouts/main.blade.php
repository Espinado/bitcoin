<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</head>

<body>
    <div id="home"></div>
    <div class="main_menu_wrap fixed-top">
        <div class="container">
            <nav id="myNavWrapp" class="navbar navbar-expand-lg p-0">
                <div class="logo-wrapp">
                    <a href="#home">

                    </a>
                </div>
                <!-- Menu toggler -->
                <label class="toggle navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <input type="checkbox">
                    <div>
                        <div>
                            <span></span>
                            <span></span>
                        </div>
                        <svg>
                            <use xlink:href="#path">
                        </svg>
                        <svg>
                            <use xlink:href="#path">
                        </svg>
                    </div>
                </label>

                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" id="path">
                        <path d="M22,22 L2,22 C2,11 11,2 22,2 C33,2 42,11 42,22"></path>
                    </symbol>
                </svg>
                <!-- Menu toggler -->

                <div class="collapse navbar-collapse" id="nav">
                    <ul id="mainNav" class="navbar-nav">
                        <li class="nav-item main-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#about_us" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#why_us" class="nav-link">Trade with us</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#how_works" class="nav-link">How it works</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#contact_us" class="nav-link">Contact us</a>
                        </li>
                    </ul>
                    <div class="langNavWrapp">
                        <ul class="navbar-nav nav mainLang">
                            <li class="menu-item parent-menu-item">EN</li>
                        </ul>
                        <ul class="navbar-nav nav subLang collapse">
                            <li class="menu-item">
                                <a href="/ru/index.php">RU</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <header class="head-banner parallax-banner">
        <div id="scene" class="customScene">
            <img data-depth="0.05" src="{{ asset('images/parallax/light_blue_rect_under.png') }}" alt="light-blue-rect-under"
                class="light-blue-rect-under" />
            <img data-depth="0.11" src="{{ asset('images/parallax/gray_rect_under.png') }}" alt="gray-rect-under"
                class="gray-rect-under" />
            <img data-depth="0.16" src="{{ asset('images/parallax/gray_rect_above.png') }}" alt="gray-rect-above"
                class="gray-rect-above" />
            <img data-depth="0.10" src="{{ asset('images/parallax/light_blue_rect_above.png') }}" alt="light-blue-rect-above"
                class="light-blue-rect-above" />
            <img data-depth="0.12" src="{{ asset('images/parallax/gra_rect_right.png') }}" alt="gray-rect-under"
                class="gray-rect-right" />
            <img data-depth="0.25" src="{{ asset('images/parallax/yellow_rect.png') }}" alt="yellow rectangle" class="yellow-rect" />
            <div data-depth="0.06" class="main-back"></div>
            <div class="overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="head-text">
                        <h1>An investment IT platform to <em>digital assets</em></h1>
                    </div>
                    <button class="start-earning">
                        <a href="#">Start Earning</a>
                    </button>
                    <div class="scroll_down">
                        <a href="#about_us">
                            <div class="mouse">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            scroll down
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
   @yield('content')
</body>

</html>
