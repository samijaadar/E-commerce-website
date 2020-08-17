<html>
<head> <link rel="stylesheet" href="styles.css"></head>
<body>
<?php include('TopMenu.php');include('Connexion.php');
if (session_status() == PHP_SESSION_NONE) {
     session_start();
}
$PanierMontant=0;
$PanierMontant = $_POST['PanierMontant'];
$_SESSION['PanierMontant']=$PanierMontant;

if (isset($_SESSION['email'])){
    $email_address=$_SESSION['email'];
}

if (isset($_SESSION['pass'])) {
    $password=$_SESSION['pass'];
}

if ((isset($_SESSION['email']) && $_SESSION['email'] != "") ||(isset($_SESSION['pass']) && $_SESSION['pass'] != "")){
    $sess = session_id();
    $query="select * from panier where id_sess = '$sess'";
    $result = mysqli_query($connect, $query) or die(mysql_error());

if(mysqli_num_rows($result)>=1) {
  #if everything is valide the user will be redirected in the delilvery details page
    echo "<meta http-equiv=\"Refresh\" content=\"0; url=DeliveryDetails.php\" />";
}
else {
  #if the cart is empty
    echo "Vous pouvez faire des achats en sélectionnant des articles dans le menu";}
}
else {
  #if the user is not connected in the website or not subscribed  ?>

    <div class="message">
        <p>Vous n'êtes actuellement pas connecté à notre système.</p><br>
        <p>Vous ne pouvez acheter que si vous êtes connecté.</p><br>
    </div>

    <div class="div">
      <div class="item-div-check"><p> Si vous êtes déjà inscrit
            <a href="Login.php">cliquer ici</a> pour s'identifier</p></div>
      <div class="item-div-check">
           <p> Si vous souhaitez créer un compte <a href="Signup.php">cliquer ici</a> pour inscrire.</p>
      </div>
    </div>
<?php
}
?>
</body>
</html>


<style>
.message{
  padding-top: 30px;
  color: gray;
}
.div{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.item-div-check {
  overflow: hidden;
  width: 40%;
  height: 200px;
  max-height: 300px;
  margin-bottom: 2%;
  border-radius: 20px;
  text-align: center;
  margin: auto;
  padding-top: 100px;
  font-size: 28px;
  font-weight: bold;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
p{
  text-align: center;
  font-size: 28px;
  font-weight: bold;
}
</style>
