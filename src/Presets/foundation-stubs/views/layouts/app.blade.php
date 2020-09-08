<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        nav {
            margin-bottom: 48px; 
        }
    </style>
</head>

<body>
    <div class="grid-container full">
        <div class="grid-x">
            <div class="cell">
                <nav>
                    <div class="top-bar">
                        <div class="top-bar-left">
                            <ul class="menu" data-dropdown-menu>
                                <li class="menu-text">
                                    <a href="{{ url('/') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="top-bar-right">
                            <ul class="dropdown menu" data-dropdown-menu>
                                <!-- Authentication Links -->
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a href="#">{{ Auth::user()->name }}</a>

                                        <ul class="menu vertical">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>
</body>
</html>
