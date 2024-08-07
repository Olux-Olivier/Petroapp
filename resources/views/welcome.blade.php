<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tache gerant</title>
    <link rel="stylesheet" href="{{ asset('css/options.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <div class="title">
                <div class="image">
                    <img src="{{ asset('img/petrole.png') }}">
                </div>
                <h3>Petro<span>App</span></h3>
            </div>
            <div class="mood">
                <img src="{{ asset('img/mode-nuit.png') }}">
            <div>
        </header>


        <div class="content">
            <div class="welcome">
                <h4>Bienvenu sur PetroApp
                </h4>
                <p>Choisissez l'action que vous voulez faire<p>
            </div>

            <div class="options">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}">
                                    <div class="card">
                                        <div class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h4>Dashboard</h4>
                                            <p>Dasboard vous permet de visualiser vos informations.</p>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}">
                                    <div class="card">
                                        <div class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h4>Login</h4>
                                            <p>Login vous permet de vous connecter à votre compte .</p>
                                        </div>
                                    </div>
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}">
                                        <div class="card">
                                            <div class="img">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                <path d="M16 19h6" />
                                                <path d="M19 16v6" />
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <h4>Register</h4>
                                                <p>Creation d'un compte pour un nouveau utilisateur.</p>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endauth
                        @endif
        </div>
    </div>
    <script src="{{ asset('js/dark.js') }}"></script>
</body>
</html>
