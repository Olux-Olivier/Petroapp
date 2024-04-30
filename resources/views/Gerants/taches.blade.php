<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tache gerant</title>
    <link rel="stylesheet" href="{{ asset('css/options.css') }}">
</head>
<body>
<<<<<<< HEAD
    <div class="container">
        <header>
            <div class="title">
                <div class="image">
                    <img src="{{ asset('img/petrole.png') }}">
                </div>
                <h3>PetroApp</h3>
            </div>
            <div class="mood">
                <img src="{{ asset('img/mode-nuit.png') }}">
            <div>
        </header>
=======
    <div class="user-info">
        @auth 
            <span>Vous etes connecté en tant que <Strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</Strong></span>
        @endauth
        @guest
            <a href="{{ route('auth.login')}}">Se connecter</a>
        @endguest

    </div>
    <h2>TACHES GERANT</h2>
    
    <div>
        <a href="{{ url('/pompiste/create') }}">Enregistrer un pompiste</a>
    </div>
>>>>>>> 93e55b56bd12f935c2e8517a7cd6b2afb24585b8


        <div class="content">
            <div class="welcome">
                <h4>Hello, <span>Mr. Olivier</span></h4>
                <p>Choisissez l'action que vous voulez faire<p>
            </div>
            
            <div class="options">
                <a href="{{ url('/pompiste/create') }}">
                    <div class="card">
                        <div class="img">
                            <!--<img src="{{ asset('img/ajouter-un-utilisateur.png') }}"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un pompiste</h4>
                            <p>Enregistrer un client particulier ou une personne morale.</p>
                        </div>
                    </div>
                </a>
                
                <a href="{{ url('/client/create') }}">
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
                            <h4>Enregistrer un client</h4>
                            <p>Enregistrer un client particulier ou une personne morale.</p>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/fournisseur/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un fournisseur</h4>
                            <p>Enregistrer un client particulier ou une personne morale.</p>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/operation/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-trello" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M7 7h3v10h-3z" />
                            <path d="M14 7h3v6h-3z" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer une operation</h4>
                            <p>Enregistrer un client particulier ou une personne morale.</p>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/Commandes/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M8.2 9.8l7.6 -4.6" />
                            <path d="M12 12v9" />
                            <path d="M12 12l-8 -4.5" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Passer une commande</h4>
                            <p>Enregistrer un client particulier ou une personne morale.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>   
    <script src="{{ asset('js/dark.js') }}"></script>
</body>
</html>