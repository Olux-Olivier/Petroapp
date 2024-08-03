<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/acc.css') }}">
        <!-- Styles -->
    </head>
    <body>
           <div class="container">
                <div  class="div-options">
                    @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                <div>
           </div>
    </body>
</html>
