<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetroApp | Liste des prets</title>
</head>
<body>
<h2>Listes des prets</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/pret/create">Nouveau pret</a>
    <div>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>article preté</th>
                    <th>Quantite</th>
                    <th>prix unitaire</th>
                    <th>prix total</th>
                    <th>date paiement</th>
                    <th>nom client</th>
                    <th>etat</th>
                </tr>
            </thead>

            <tbody>
            @foreach($prets as $pret)
                <tr>
                    <td>{{$pret->id}}</td>
                    <td>{{$pret->article_id}}</td>
                    <td>{{$pret->qte}}</td>
                    <td>{{$pret->prix_unitaire}}</td>
                    
                    @php
                        $prix_total = $pret->prix_unitaire * $pret->qte;
                    @endphp
                    <td>{{ $prix_total }}</td>

                    <td>{{$pret->datepaiement}}</td>
                    <td>{{$pret->client_id}}</td>
                    <td>{{$pret->etat}}</td>
                    <td>
                        <a href="/pret/{{$pret->id}}/edit">Modifier</a>
                    </td>

                    <td>
                        <form action="{{route('pret.destroy',$pret)}}" method="post">
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