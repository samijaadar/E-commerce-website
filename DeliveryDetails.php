<html>
  <head>
  <link rel="stylesheet" href="css/form.css">
  </head>

<?php
include('TopMenu.php');
include('Connexion.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['PanierMontant'])) {
    $PanierMontant=$_SESSION['PanierMontant'];
}

$email_address="";
if (isset($_SESSION['email'])) {
     $email_address=$_SESSION['email'];
}

if (isset($_SESSION['pass'])) {
      $password=$_SESSION['pass'];
}

if ((isset($_SESSION['email']) && $_SESSION['email'] != "") || (isset($_SESSION['pass']) && $_SESSION['pass'] != ""))
{
$query = "SELECT * FROM client where email_address like '$email_address'
and password like (PASSWORD('$password'))";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
}
?>

<body>

<h1>Information Du livraison</h1>
    <div class="main">
            <form action="DetailsPayment.php" method="post" class="form">
                <h2 class="name">Email: </h2><input class="company" type="text" name="email_address" value="<?php echo $email_address; ?>">
                <h2 class="name">Nom Complet: </h2><input class="company" type="text" name="nom" value="<?php echo $nom;?>">
                <h2 class="name">Adresse: </h2><input class="company" type="text" name="Adresse" value="<?php echo $address_line1; ?>">
                <h2 class="name">Ville: </h2><input class="company" type="text" name="ville" value="<?php echo $ville; ?>">
                <h2 class="name">Pays:</h2><input class="company" type="text"name="pays"value="<?php echo $pays; ?>">
                <h2 class="name">Code postale: </h2><input class="company" type="text" name="code_p" value="<?php echo $code_postal; ?>">
                <h2 class="name">Telephone: </h2><input class="company" name="telephone" value="<?php echo $telephone; ?>">
                <button class="btn-p" type="submit">Continuer</button>
            </form>
    </div>
</body>
</html>
