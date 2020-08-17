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
<style>
*{
  margin: 0;
  padding:0;
  text-decoration: none;
  list-style-type: none;
}
/*body*/

.container-box {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;

  margin: 60px 40px;
}


.product-card{
background: white;
    margin: 10px;
    width: 250px;
    padding: 15px;
    border-radius: 30px;
    text-transform: uppercase;
box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.product-pic{
    height:230px;
}
.product-pic img{
  max-height:200px;
  width:auto;
  height:auto;
  max-width:250px
}
.product-title h3{
font-size: 20px;
margin-bottom: 4px;
color: black;
}
.product-title h5{
font-size: 18px;
margin-bottom: 5%;
color: #bbb;
}


.product-info{
display: flex;
align-items: center;
margin-top:15%;
}
.product-title{
margin-bottom:40px;
max-width: 300px;
height:68px;
overflow:hidden;
}
.product-price{
color: #2175f5;
font-size: 26px;
margin-bottom: 20px;
}
.product-button{
margin-left: auto;
color: #2175f5;
text-decoration: none;
border: 2px solid;
padding: 8px 24px;
border-radius: 20px;
transition: .4s linear;
}

.product-button:hover{
transform: scale(1.06);
}
</style>
