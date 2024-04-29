<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pompistes</title>
</head>
<body>
    <h2>Listes des pompistes</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/pompiste/create">Nouveau pompiste</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>postnom</th>
                    <th>prenom</th>
                    <th>conctact</th>
                </tr>
            </thead>

            <tbody>
            @foreach($pompistes as $pompiste)
                <tr>
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