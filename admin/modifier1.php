<?php
$connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or
die("Serveur non connecter");
$id=$_POST['id'];
$query = "SELECT * FROM produits where Code='$id'";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <link rel="stylesheet" type="text/css" href="styles.css">
 </head>
 <body>
 <header><h1>SAMI</h1></header>
     <h1 style="text-align:center;padding:10px;">Modifier un produit</h1>
 <div class="main">
         <form action="modifier.php" method="post" class="form">
 <h2 class="name">Code </h2><input class="company" type="text" name="Code" value="<?php echo $Code; ?>">
 <h2 class="name">Titre</h2><input class="company" type="text" name="Titre" value="<?php echo $Titre; ?>">
 <h2 class="name">Marque</h2><input class="company" type="text" name="Marque" value="<?php echo $Marque; ?>">
 <h2 class="name">Modele</h2><input class="company" type="text" name="Modele" value="<?php echo $Modele; ?>">
 <h2 class="name">Poids </h2><input class="company" type="text" name="Poids" value="<?php echo $Poids; ?>">
 <h2 class="name">Dimensions </h2><input class="company" type="text" name="Dimensions" value="<?php echo $Dimensions; ?>">
 <h2 class="name">Categorie</h2>
 <select class="option" name="Categorie">
                 <option disabled="disabled" selected="selected">--Choisir la Categorie--</option>
                 <option>telephones</option>
                 <option>ordinateurs</option>
                 <option>Cameras</option>
                 <option>livres</option>
             </select>
     <h2 class="name">Quantite </h2><input class="company" type="text" name="Quantite"value="<?php echo $Quantite; ?>">
     <h2 class="name">Prix </h2><input class="company" type="text" name="Prix" value="<?php echo $Prix; ?>">
     <h2 class="name">image </h2><input class="company" type="text" name="image" value="<?php echo $Image; ?>">
     <h2 class="name">Description </h2><textarea class="company" name="description"><?php echo $Description;?></textarea>
     <br>
             <button class="btn-p" type="submit">Modifier</button>
         </form>  </div>
 </body>
 </html>
