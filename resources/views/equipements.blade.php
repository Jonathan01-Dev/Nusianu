<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipements</title>
</head>
<body>
    <form action="{{route('equipements')}}" method="POST">
        @csrf
    <label for="">
        <input type="text" name="nom">Nom
        <input type="text" name="description">Description
        <input type="text" name="categorie">Categorie
        <input type="text" name="disponibilite">Disponibilite
        <input type="text" name="prixLocation">Prix de location
        <button type="submit">Submit</button>
    </label>
    </form>
   
</body>
</html>