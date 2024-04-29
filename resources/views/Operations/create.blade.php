<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer Operation</title>
</head>
<body>

    <h1>Opration journalière</h1>
    <div>
        <form  method="post" action="/operation">
            @csrf
            <div>
                <label for="">Stock initial</label>
                <input type="number" name="stock_initial">
            </div>
            <div>
                <label for="">Type article</label>
                <select name="article_id">
                    @foreach ($articles as $article)
                        <option value="{{ $article->id }}">{{ $article->nom }}</option>
                    @endforeach
                </select>
            
            </div>

            <div>
                <label for="">Index avant</label>
                <input type="number" name="index_avant">
            </div>

            <div>
                <label for="">Index aprés</label>
                <input type="number" name="index_apres">
            </div>

            <div>
                <label for="">Prix unitaire</label>
                <input type="number" name="prix_unitaire">
            </div>

            <div>
                <label for="">Nom pompiste</label>
                <select name="pompiste_id">
                    @foreach ($pompistes as $pompiste)
                        <option value="{{ $pompiste->id }}">{{ $pompiste->nom }}</option>
                    @endforeach
                </select>
            </div>
            
            <input type="submit" value="Enregistrer">
        </form>
    </div>
    <div>
        <a href="{{ url('/gerant/taches') }}">Retour</a>
    </div>
</body>
</html>