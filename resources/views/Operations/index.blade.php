<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Operations journalières</title>
</head>
<body>  
    <h2>Listes des operations</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/operation/create">Nouvelle opeartion</a>
    <div>

        <table>
            <thead>
                <tr>
                    <th>Initial</th>
                    <th>Article</th>
                    <th>Index-Avant</th>
                    <th>Index-Apres</th>
                    <th>Qte-vendue</th>
                    <th>Prix unitaire</th>
                    <th>Prix Total</th>
                    <th>Pompiste</th>
                </tr>
            </thead>

            <tbody>
            @foreach($operations as $operation)
                <tr>
                    <td>{{$operation->stock_initial}}</td>
                    <td>{{$operation->article_id}}</td>
                    <td>{{$operation->index_avant}}</td>
                    <td>{{$operation->index_apres}}</td>
                    @php
                        $qte_vendue = $operation->index_apres-$operation->index_avant;
                    @endphp
                    <td>{{$qte_vendue}} L</td>
                    <td>{{$operation->prix_unitaire}} CDF</td>
                    @php
                        $prix_total = $operation->prix_unitaire * $qte_vendue;
                    @endphp
                    <td>{{$prix_total}} CDF</td>
                    <td>{{$operation->pompiste_id}}</td>
                    <td>
                        <a href="/operation/{{$operation->id}}/edit">Modifier</a>
                    </td>

                    <td>
                        <form action="{{route('operation.destroy',$operation)}}" method="post">
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