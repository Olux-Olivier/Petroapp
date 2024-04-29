<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste fournisseurs</title>
</head>
<body>
    <h2>Listes des fournisseurs</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/fournisseur/create">Nouveau fournisseur</a>
    <div>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom fournisseur</th>
                    <th>eamil</th>
                    <th>telephone</th>
                    <th>adresse</th>
                </tr>
            </thead>

            <tbody>
            @foreach($fournisseurs as $fournisseur)
                <tr>
                    <td>{{$fournisseur->id}}</td>
                    <td>{{$fournisseur->nom}}</td>
                    <td>{{$fournisseur->email}}</td>
                    <td>{{$fournisseur->numerotel}}</td>
                    <td>{{$fournisseur->adresse}}</td>
                    <td>
                        <a href="/fournisseur/{{$fournisseur->id}}/edit">Modifier</a>
                    </td>

                    <td>
                        <form action="{{route('fournisseur.destroy',$fournisseur)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
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