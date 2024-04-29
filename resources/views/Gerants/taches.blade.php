<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tache gerant</title>
</head>
<body>
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

    <div>
        <a href="{{ url('/client/create') }}">Enregistrer un client</a>
    </div>

    <div>
        <a href="{{ url('/fournisseur/create') }}">Enregistrer un fournisseur</a>
    </div>

    <div>
        <a href="{{ url('/operation/create') }}">Enregistrer une operation</a>
    </div>

    <div>
        <a href="{{ url('/Commandes/create') }}">Passer une commande</a>
    </div>

   
</body>
</html>