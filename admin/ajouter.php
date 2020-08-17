<?php
$MySQLi = new MySQLiv("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping");
if ($MySQLi->connect_error) { die("Connection failed: " . $MySQLi->connect_error);
}
$Code = $_POST["Code"];
$Titre = $_POST["Titre"];
$Marque = $_POST["Marque"];
$Modele= $_POST["Modele"];
$Poids = $_POST["Poids"];
$Dimensions = $_POST["Dimensions"];
$Categorie= $_POST["Categorie"];
$Quantite= $_POST["Quantite"];
$Prix = $_POST["Prix"];
$image = $_POST["image"];
$description=$_POST["description"];
#add the product in the database
$sql = "INSERT INTO produits (Code,Titre,Marque,Modele,Poids,Dimensions,Categorie,Quantite,Prix,Image,Description)
VALUES ('$Code','$Titre', '$Marque','$Modele','$Poids','$Dimensions','$Categorie','$Quantite','$Prix','$image','$description')";
if ($MySQLi->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $MySQLi->error;
}
$MySQLi->close();
?>
