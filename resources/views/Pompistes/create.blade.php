<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistre pompiste</title>
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
    <h1>Ajouter un pompiste</h1>
        <div>
            <form  method="post" action="/pompiste">
                @csrf
                <label for="">Nom</label>
                <input type="text" name="nom" >


            <label for="">Postnom</label>
            <input type="text" name="postnom">
            
            <label for="">Prénom</label>
            <input type="text" name="prenom">

            <label for="">Contact</label>
            <input type="text" name="contact">

            <input type="submit" value="Ajouter">
            </form>
        </div>

        <div>
            <a href="{{ url('/gerant/taches') }}">Retour</a>
        </div>
</body>
</html>