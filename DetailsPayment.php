<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="css/form.css">
    <meta charset="utf-8">
</head>
<?php
include('TopMenu.php');include('Connexion.php');
if (session_status() == PHP_SESSION_NONE) {
      session_start();
}
if (isset($_SESSION['PanierMontant'])){
      $PanierMontant=$_SESSION['PanierMontant'];
}

$nom=$_POST['nom'];
$adresse = $_POST['Adresse'];
$ville = $_POST['ville'];
$codep = $_POST['code_p'];
$pays = $_POST['pays'];
$telephone= $_POST['telephone'] ;
$email=$_SESSION['email'];
#update client delivery informations in the database
$sql = "UPDATE client SET address_line1='$adresse',ville='$ville',code_postal='$codep',pays='$pays',telephone='$telephone'  WHERE email_address='$email'";
$results = mysqli_query($connect, $sql) or die(mysql_error());
#export the payment data from database if exsit
$query = "SELECT * FROM payment_details WHERE email_address='$email'";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
?>
  <body>
      <h1>Formulaire de payement online</h1>

      <div class="main">
          <form action="Order.php" method="post" class="form" id="payment-form">
                <h2 class="name">Numero de la carte: </h2><input class="company" type="text" name="carteNum" value="<?php echo $NumCarte; ?>">
                <h2 class="name">CVC: </h2><input class="company" type="text" name="card-cvc" >
                <h2 class="name">Nom complet: </h2><input class="company" type="text" name="Nom" value="<?php echo $carteNom ;?>">
                <h2 class="name">Expiration (MM/AAAA): </h2><input class="company" type="text" name="Expiration"value="<?php echo $expiration_date ;?>"  >
                <button class="btn-p" type="submit">Continuer</button>
          </form>
      </div>
  </body>
  </html>
