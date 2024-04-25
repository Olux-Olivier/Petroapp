<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistre pompiste</title>
</head>
<body>
    <h1>Ajouter un pompiste</h1>
        <div>
            <form  method="post" action="/pompiste">
                @csrf
                <label for="">Nom</label>
                <input type="text" name="nom" >


            <label for="">Postnom</label>
            <input type="text" name="postnom">
            
            <label for="">Prénom</label>
            <input type="text" name="prenom">

            <label for="">Contact</label>
            <input type="text" name="contact">

            <input type="submit" value="Ajouter">
            </form>
        </div>
</body>
</html>