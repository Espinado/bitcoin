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
    <script type="application/javascript">
        $(document).ready(function() {
            $('#language').on('change', function() {

                window.location = './locale/' + this.value;
            });

        });

    </script>



</head>

<body>
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
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
                            <a href="#home" class="nav-link">{{ __('home') }}</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#about_us" class="nav-link">{{  __('about') }}</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#why_us" class="nav-link">{{ __('trade') }}</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#how_works" class="nav-link">{{ __('how') }}</a>
                        </li>
                        <li class="nav-item main-item">
                            <a href="#contact_us" class="nav-link">{{ __('contact') }}</a>
                        </li>
                    </ul>
                    <select id="language" name="language">
                        <option value="{{ App::getLocale() }}">{{ App::getLocale() }}</option>
                        @foreach (array_values(config('locale.languages')) as $language)
                            @if ($language[0] !== App::getLocale())
                                <option value="{{ $language[0] }}">{{ $language[0] }}</option>
                            @endif
                        @endforeach

                    </select>

                    {{-- <div class="langNavWrapp"> --}}
                    {{-- <ul class="navbar-nav nav mainLang"> --}}
                    {{-- <li class="menu-item parent-menu-item">{{ App::getLocale() }}</li> --}}
                    {{-- </ul> --}}
                    {{-- <ul class="navbar-nav nav subLang collapse" id="language" name="language"> --}}
                    {{-- @foreach (array_values(config('locale.languages')) as $language) --}}
                    {{-- @if ($language[0] !== App::getLocale()) --}}
                    {{-- <li class="menu-item" > --}}
                    {{-- <a href="">{{ $language[0] }}</a> --}}
                    {{-- </li> --}}
                    {{-- @endif --}}
                    {{-- @endforeach --}}
                    {{-- </ul> --}}
                    {{-- </div> --}}
                </div>
            </nav>
        </div>
    </div>
    <header class="head-banner parallax-banner">
        <div id="scene" class="customScene">
            <img data-depth="0.05" src="{{ asset('images/parallax/light_blue_rect_under.png') }}"
                alt="light-blue-rect-under" class="light-blue-rect-under" />
            <img data-depth="0.11" src="{{ asset('images/parallax/gray_rect_under.png') }}" alt="gray-rect-under"
                class="gray-rect-under" />
            <img data-depth="0.16" src="{{ asset('images/parallax/gray_rect_above.png') }}" alt="gray-rect-above"
                class="gray-rect-above" />
            <img data-depth="0.10" src="{{ asset('images/parallax/light_blue_rect_above.png') }}"
                alt="light-blue-rect-above" class="light-blue-rect-above" />
            <img data-depth="0.12" src="{{ asset('images/parallax/gra_rect_right.png') }}" alt="gray-rect-under"
                class="gray-rect-right" />
            <img data-depth="0.25" src="{{ asset('images/parallax/yellow_rect.png') }}" alt="yellow rectangle"
                class="yellow-rect" />
            <div data-depth="0.06" class="main-back"></div>
            <div class="overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="head-text">
                        <h1>{{ __('platform') }}</em></h1>
                    </div>
                    <button class="start-earning">
                        <a href="#">{{ __('start') }}</a>
                    </button>
                    <div class="scroll_down">
                        <a href="#about_us">
                            <div class="mouse">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                           {{__('scroll')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about_us">
        <div class="container">
            <h2>{{ __('about') }}</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about_us_tab">
                        <h4>
                            Who we are
                        </h4>
                        <div class="content">
                            who_are_we
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about_us_tab">
                        <h4>
                            What we do
                        </h4>
                        <div class="content">
                            what_we_do
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="about_us_tab">
                        <h4>
                            Why we do it
                        </h4>
                        <div class="content">
                            why_we_do_it
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why_us">
        <div class="container h-100">
            <h2>{{ __('why') }}</h2>
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            1
                        </div>
                        <div class="reason_text">
                            1_reason
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            2
                        </div>
                        <div class="reason_text">
                            2_reason
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            3
                        </div>
                        <div class="reason_text">
                            3_reason
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            4
                        </div>
                        <div class="reason_text">
                            4_reason
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            5
                        </div>
                        <div class="reason_text">
                            5_reason
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="reason_wrapp">
                        <div class="reason_num">
                            6
                        </div>
                        <div class="reason_text">
                            6_reason
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="how_works">
        <div class="container h-100">
            <h2>{{ __('how') }}</h2>
            <div class="row h-100 justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step_wrapp">
                        <img class="step_image first" src="{{ asset('images/1_step.png') }}" alt="step image">
                        <div class="step_text">
                            {{ __('first') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step_wrapp">
                        <img class="step_image second" src="{{ asset('images/2_step.png') }}" alt="step image">
                        <div class="step_text">
                            {{ __('second') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step_wrapp">
                        <img class="step_image third" src="{{ asset('images/3_step.png') }}" alt="step image">
                        <div class="step_text">
                            {{ __('third') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact_us">
        <div class="container">
            <h2>{{ __('contact') }}</h2>
            <div class="row">
                <div class="col-12">
                    <div class="mail_wrapp">
                        <form action="{{route('submit')}}" method="POST" class="contact_form" novalidate="novalidate" data-status="init">
                            @csrf
                            <label>{{ __('name') }}
                                <span class="control_wrapp your-name">
                                    <input type="text" name="name" value="" size="40" aria-required="true"
                                        aria-invalid="false">
                                </span>
                            </label>
                            <label>{{ __('mail') }}
                                <span class="control_wrapp your-email">
                                    <input type="email" name="email" value="" size="40" aria-required="true"
                                        aria-invalid="false">
                                </span>
                            </label>
                            <label> {{ __('message') }}
                                <span class="control_wrapp your-message">
                                    <textarea name="message" cols="40" rows="10" aria-required="true"
                                        aria-invalid="false"></textarea>
                                </span>
                            </label>
                            <input type="submit" value="{{ __('start') }}" class="form-submit btn btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
