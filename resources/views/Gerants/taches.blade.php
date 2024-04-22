<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tache gerant</title>
</head>
<body>
    <h2>TACHES GERANT</h2>

    <div>
        <a href="{{ url('/client/create') }}">Enregistrer un client</a>
    </div>

    <div>
        <a href="{{ url('/fournisseur/create') }}">Enregistrer un fournisseur</a>
    </div>

    <div>
        <a href="{{ url('/operation/create') }}">Enregistrer une operation</a>
    </div>

    <div>
        <a href="{{ url('/Commandes/create') }}">Passer une commande</a>
    </div>

   
</body>
</html>