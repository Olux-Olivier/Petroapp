<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste articles</title>
</head>
<body>

    <h2>Listes d'articles</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/article/create">Nouvel article</a>
    <div>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom article</th>
                </tr>
            </thead>

            <tbody>
            @foreach($articles as $article)
                <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->nom}}</td>

                <td>
                    <a href="/article/{{$article->id}}/edit">Modifier</a>
                </td>

                <td>
                    <form action="{{route('article.destroy',$article)}}" method="post">
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
