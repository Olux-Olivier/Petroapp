<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetroApp | Liste des commandes</title>
</head>
<body>
<h2>Listes des commandes</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/cmdfournisseur/create">Nouvelle commande</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>article commandé</th>
                    <th>Quantite en litre</th>
                    <th>prix unitaire</th>
                    <th>prix total</th>
                    <th>nom fournisseur</th>
                    <th>etat</th>
                </tr>
            </thead>

            <tbody>
            @foreach($cmdfournisseurs as $cmdfournisseur)
                <tr>
                    <td>{{ $cmdfournisseur->id }}</td>
                    <td>{{ $cmdfournisseur->article_id }}</td>
                    <td>{{ $cmdfournisseur->qte }}</td>
                    <td>{{ $cmdfournisseur->prix }}</td>

                    @php
                        $prix_total = $cmdfournisseur->prix * $cmdfournisseur->qte;
                    @endphp
                    <td>{{ $prix_total }}</td>

                    <td>{{$cmdfournisseur->fournisseur_id}}</td>
                    <td>
                    <form action="{{route('cmdfournisseur.livre')}}" method="post">
                        @csrf
                        <input type="hidden" name="id_article" value="{{$cmdfournisseur->article}}">
                        <input type="hidden" name="qte" value="{{$cmdfournisseur->qte}}">
                        <input type="hidden" name="id" value="{{$cmdfournisseur->id}}">
                        <input type="hidden" name="etat" value="{{$cmdfournisseur->etat}}">
                        <button>{{$cmdfournisseur->etat}}</button>
                    </form>
                    </td>
                    <td>
                        <a href="/cmdfournisseur/{{$cmdfournisseur->id}}/edit">Modifier</a>
                    </td>

                    <td>
                        <form action="{{route('cmdfournisseur.destroy',$cmdfournisseur)}}" method="post">
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

    <div>
        @php
            if(empty($stock_essence)){
                $stock_essence = 0;
            }
            if(empty($stock_gazoil)){
                $stock_gazoil = 0;
            }
        @endphp

        Stock essence : {{$stock_essence}} <br>
        Stock gazoil : {{$stock_gazoil}}

    </div>
</body>
</html>
