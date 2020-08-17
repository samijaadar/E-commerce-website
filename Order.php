<?php
include('Connexion.php');
include('TopMenu.php');
$MontantTotal=0;
#create new session
if (session_status() == PHP_SESSION_NONE) {session_start();}
#get the total price of items selected
if (isset($_SESSION['PanierMontant'])){ $PanierMontant=$_SESSION['PanierMontant'];}
$email= $_SESSION['email'] ;
#extract client data for database
$query = "SELECT * FROM client where email_address like '$email'";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
$date = date("Y-m-d");
#set id for order and session
$orderid = uniqid();
$sessid = session_id();
#extract all items from cart
$query = "SELECT * FROM panier WHERE id_sess='$sessid'";
$results = mysqli_query($connect, $query) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
extract($row);
$MontantTotal=$MontantTotal + ($p_prix * $p_quantite);
#update orders informations in the data base
$sql3 = "INSERT INTO orders (order_no,code, nomP,quantite, prix,cmd_date, adress_livraison,email_address,nom_client)
VALUES ('$orderid','$p_code','$p_titre','$p_quantite','$p_prix','$date','$ville','$email','$nom')";
if ($connect->query($sql3) === TRUE) {
  $sql5 = "UPDATE produits set Quantite=Quantite-'$p_quantite' where Code='$p_code'";
  if ($connect->query($sql5) === TRUE) {
  }
  else {
    echo "Erreur: " . $sql5 . "<br>" . $connect->error;
  }
}
else {
  echo "Erreur: " . $sql3 . "<br>" . $connect->error;
}
}
$Nom=$_POST['Nom'];
$carteNum=$_POST['carteNum'];
$Expiration_date=$_POST['Expiration'];
$sql4= "UPDATE payment_details set date_pay='$date', email_address='$email',
nomCli='$nom', carteNom='$Nom', NumCarte='$carteNum', expiration_date='$Expiration_date',montant_payer='$MontantTotal' Where email_address='$email'";
if ($connect->query($sql4) === TRUE) {
} else {
  echo "Erreur: " . $sql4 . "<br>" . $connect->error;
}
echo "  <div class=\"container-box\">
<div class=\"item-commande\">";
echo "<h1 style=\"color:green; padding-top:50px;\"> La commande est passe avec succès<h1><br>";
echo "<h3> Numero de votre commande est : ".$orderid."<h3><br>";
echo "<form action=\"Facture.php?icode=$orderid&montant=$MontantTotal&action=I\" method=\"post\">
<input type=\"submit\" value=\"Voir Facture\"><br>
</form>";
echo "<form action=\"Facture.php?icode=$orderid&montant=$MontantTotal&action=D\" method=\"post\">
<input type=\"submit\" value=\"Telecherger\">
</form><div></div>";
$query = "DELETE FROM panier WHERE id_sess='$sessid'";
$delete = mysqli_query($connect, $query) or die(mysql_error());
#session_destroy();
?>

<style>
.item-commande{
  width: 60%;
  overflow:hidden;
  height: 300PX;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container-box {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  width: 90%;
  margin: auto;
  justify-content:center;
  transform:translateY(40%);
}
form{
  display:inline-flex;
  justify-content:left;
  justify-content: space-around;

}
input{

  padding:18px;
  margin:10px;
  border:none;
  border-radius:15px;
  font-weight:bold;
  font-size:18px;
  background:gold;
}
</style>
