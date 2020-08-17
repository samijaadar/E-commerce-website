<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header><h1>SAMI</h1></header>
<h1 style="text-align:center;padding:10px;">Ajouter un produit</h1>
<div class="main">
<form action="ajouter.php" method="post" class="form">
<h2 class="name">Code </h2><input class="company" type="text" name="Code">
<h2 class="name">Titre</h2><input class="company" type="text" name="Titre">
<h2 class="name">Marque</h2><input class="company" type="text" name="Marque">
<h2 class="name">Modele</h2><input class="company" type="text" name="Modele">
<h2 class="name">Poids </h2><input class="company" type="text" name="Poids">
<h2 class="name">Dimensions </h2><input class="company" type="text" name="Dimensions">
<h2 class="name">Categorie</h2>
<select class="option" name="Categorie">
                <option disabled="disabled" selected="selected">--Choisir la Categorie--</option>
                <option>telephones</option>
                <option>ordinateurs</option>
                <option>Cameras</option>
                <option>livres</option>
            </select>
    <h2 class="name">Quantite </h2><input class="company" type="text" name="Quantite">
    <h2 class="name">Prix </h2><input class="company" type="text" name="Prix">
    <h2 class="name">image </h2><input class="company" type="text" name="image"><br>
    <h2 class="name">Description </h2><textarea class="company" name="description"></textarea>
            <button class="btn-p" type="submit">Ajouter</button>
</form>  </div>
</body>
</html>
