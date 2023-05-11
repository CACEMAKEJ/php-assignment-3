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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c51eff10e9.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-r from-gray-400 via-gray-200 to-gray-400 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="header">


                <div class="container mx-auto flex justify-between items-center px-2">

                <div>

                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">

                        {{ config('app.name', 'Laravel') }}


                    </a>

                </div>
                <img src="images\newnewlogo.png" alt="test" class="logoImage">

                <nav class="space-x-10 text-gray-100 text-lg font-semibold  sm:text-base float-right">

                    <a class="no-underline hover:text-yellow-300 transition duration-300 delay-150 hover:delay-300" href="/">Home</a>
                    <a class="no-underline hover:text-yellow-300 transition duration-300 delay-150 hover:delay-300" href="/blog">Blog</a>
                    <a class="no-underline hover:text-yellow-300 transition duration-300 delay-150 hover:delay-300" href="/coaching">Coaching</a>
                    @guest
                        <a class="no-underline hover:text-yellow-300 transition duration-300 delay-150 hover:delay-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="text-center bg-yellow-300  rounded-md text-gray-900 py-1 px-1  text-s   hover:bg-yellow-200 hover:text-black  transition duration-300 delay-150 hover:delay-300" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                        class="text-center bg-yellow-300  rounded-md text-gray-900 py-1 px-1  text-s   hover:bg-yellow-200"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>

</body>
</html>
