<?php
$MySQLi = new MySQLi("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping");
if ($MySQLi->connect_error) {
  die("Connection failed: ");
}
$Code_produit = $_POST["Code"];
$Titre_produit = $_POST["Titre"];
$Marque_produit = $_POST["Marque"];
$Modele_produit= $_POST["Modele"];
$Poids_produit = $_POST["Poids"];
$Dimensions_produit = $_POST["Dimensions"];
$Categorie_produit= $_POST["Categorie"];
$Quantite_produit= $_POST["Quantite"];
$prix_produit = $_POST["Prix"];
$description_produit=$_POST["description"];
$image_produit = $_POST["image"];
$sql = "UPDATE produits set Titre='$Titre_produit', Marque='$Marque_produit',Modele='$Modele_produit',Poids='$Poids_produit',
Dimensions='$Dimensions_produit',Categorie='$Categorie_produit',Quantite='$Quantite_produit',
Prix='$prix_produit',Image='$image_produit',Description='$description_produit' where Code='$Code_produit'";
if ($MySQLi->query($sql) === TRUE) {
	?>
  <meta http-equiv="refresh" content="0; url=index.php" />
	<?php
    echo "le produit est ajouter avec succes";
} else {
    echo "Error: " . $sql . "<br>" . $MySQLi->error;
}
$MySQLi->close();
?>
