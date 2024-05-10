<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Liste des pompistes</title>
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
    <h2>Listes des pompistes</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/pompiste/create">Nouveau pompiste</a>
    <div>
    <table>
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Nom</td>
                            <td>Postnom</td>
                            <td>Prenom</td>
                            <td>Conctact</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($pompistes as $pompiste)
                       
                            <tr>
                                <div class="ligne">
                                    <td>{{$pompiste->id}}</td>
                                    <td>{{$pompiste->nom}}</td>
                                    <td>{{$pompiste->postnom}}</td>
                                    <td>{{$pompiste->prenom}}</td>
                                    <td>{{$pompiste->contact}}</td>
                                    <td>
                                        <a href="/pompiste/{{$pompiste->id}}/edit">Modifier</a>
                                    </td>

                                    <td>
                                        <form action="{{route('pompiste.destroy',$pompiste)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </div>
                            </tr>
                        
                    @endforeach
                    </tbody>
    </table>
        
    </div>

    <div>
        <a href="{{ url('/gerant/taches') }}">Retour</a>
    </div>
</body>
</html>
