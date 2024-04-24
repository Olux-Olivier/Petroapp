<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un client</title>
</head>
<body>
    <h1>Ajout Client</h1>
    <div>
        <form  method="post" action="/client">
            @csrf
            <label for="">Nom</label>
            <input type="text" name="nom" >

            <label for="">Type client</label>
           <select name="typeclient" id="">
                <option value="entreprise">Entreprise</option>
                <option value="particulier">Particulier</option>
           </select>

           <label for="">Email</label>
           <input type="email" name="email">

           <label for="">Adresse</label>
           <input type="text" name="adresse">

           <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>