<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations journalières</title>
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
    <a href="/operation/create">Nouvelle operation</a>
    

    <div>
        <a href="{{ url('/gerant/taches') }}">Retour</a>
    </div>
</body>
</html>