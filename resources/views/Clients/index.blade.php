<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
</head>
<body>
   
<h2>Listes de clients</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/client/create">Nouveau client</a>
    <div>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom client</th>
                    <th>type client</th>
                    <th>email</th>
                    <th>adresse</th>
                </tr>
            </thead>

            <tbody>
            @foreach($clients as $client)
                <tr>
                <td>{{$client->id}}</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->typeclient}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->adresse}}</td>
                    <td>
                        <a href="/client/{{$client->id}}/edit">Modifier</a>
                    </td>

                    <td>
                        <form action="{{route('client.destroy',$client)}}" method="post">
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
</body>
</html>