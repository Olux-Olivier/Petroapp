<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un fournisseur</title>
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
    <h1>Ajout fournisseur</h1>
    <div>
        <form  method="post" action="/fournisseur">
            @csrf
            <label for="">Nom</label>
            <input type="text" name="nom" >


           <label for="">Email</label>
           <input type="email" name="email">
           
           <label for="">Téléphone</label>
           <input type="text" name="numerotel">

           <label for="">Adresse</label>
           <input type="text" name="adresse">

           <input type="submit" value="Ajouter">
        </form>
    </div>

    <div>
        <a href="{{ url('/gerant/taches') }}">Retour</a>
    </div>
</body>
</html>