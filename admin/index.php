<html>
<head>
  	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
$connect= mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or
die("Please, check your server connection.");
if (isset($_SESSION['email']))
{
$email_address=$_SESSION['email'];
}

if (isset($_SESSION['pass']))
{
$password=$_SESSION['pass'];
}
if ((isset($_SESSION['email']) && $_SESSION['email'] != "") ||
(isset($_SESSION['pass']) && $_SESSION['pass'] != "")) {

    $connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or
    die("Please, check your server connection.");
    $email= $_SESSION['email'] ;
    $query = "SELECT * FROM administrateur where email_address like '$email'";
    $results = mysqli_query($connect, $query) or die(mysql_error());
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    extract($row);

$sess = session_id();
?>
<header>
  <h1>SAMI</h1>
</header>
<div class="wrapper">

               <div class="topnav" id="myTopnav">
                 <a href="signup.php">Ajouter Admin</a>
                 <a href="statistique.php">Statistique</a>
                  <a href="commande.php">Commandes</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
               <li class="signup" ><a href="logout.php">log out</a></li>
              <li class="signin" ><a href=""><?php echo "Welcome ". $nom ?></a></li>
</div>
 <div class="container-box">
         <div class="item"><a href="ajouterProduit.php"><button class="btn">Ajouter un produits</button></a></div>
         <div class="item"><a href="modifierProduit.php"><button type="submit" class="btn">Modifier</button></a></div>
         <div class="item"><a href="supprimerProduit.php"><button class="btn">Supprimer</button></a></div>
   </div>
</body>
</html>
<script>
function myFunction() {
 var x = document.getElementById("myTopnav");
 if (x.className === "topnav") {
   x.className += " responsive";
 } else {
   x.className = "topnav";
 }
}
</script>
<?php
}
else {
  echo "<meta http-equiv=\"Refresh\" content=\"0; url=login.php\" />";
}
?>
