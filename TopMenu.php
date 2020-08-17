
<!DOCTYPE html>
<head>
<meta charset="utf-8">
      <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <title>Sami Store</title>
    </head>

</head>
<body>
    <header><h1>SAMI</h1></header>
<div class="topnav" id="myTopnav">
  <span class="menu">
<a href="index.php" class="active">Menu</a></span>
<div class="dropdown">
  <button class="dropbtn">Produits

  </button>
  <div class="dropdown-content">
    <a href="listProduct.php?category=ordinateurs">Ordinateurs</a>
    <a href="listProduct.php?category=telephones">Telephones</a>
    <a href="listProduct.php?category=cameras">Cameras</a>
    <a href="listProduct.php?category=livres">Livres</a>
  </div>
</div>
<span class="menu">
  <a href="#contact">Contact</a>
  <a href="#contact">À propos</a>
  </span>
<a href="Cart.php" class="cart">Panier</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
<a href="index.php" class="icon2" ><i class="fa fa-home" style="font-size:28px"></i></a>

<?php include('Connexion.php');
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
#if user connected
if (isset($_SESSION['email']))
{

  $email= $_SESSION['email'] ;
  $query = "SELECT * FROM client where email_address like '$email'";
  $results = mysqli_query($connect, $query) or die(mysql_error());
  $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
  extract($row);
  echo "<li class=\"signup\"><a href=\"Logout.php\">Log out</a></li>";
  echo "<li class=\"signin\"><a href=\"#\"> Welcome ".$nom."</a></li>";# to show user name in the header
}
#if user is not connected or subscribed
else
{
  echo "<li class=\"signup\"><a href=\"Signup.php\">S'inscrire</a><li>";
  echo "<li class=\"signin\"><a href=\"Login.php\">S'identifier</a></li>";
}?>

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
.topnav {
  background-color: white;
  overflow: hidden;
  margin-left:100px;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
}
/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
.topnav .icon2 {
  display: none;
}
/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}
/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 20px;
  border: none;
  outline: none;
  cursor: pointer;
  font-weight: bold;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}
/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}
/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}
header h1{
  padding:5px;
  background:#112233;
  color:#f0f1f5;
  font-family: 'Yellowtail';
  text-align: center;
  font-size:30pt;
  letter-spacing: 15px;
}
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 1000px) {
  .topnav a, .dropdown .dropbtn {
    display: none;
  }
  .menu{display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnav a.icon2 {
    float: left;
    display: block;
  }
.topnav{
  margin-left: 10px;
}
}
/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 1000px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
/*signin signup*/
.signin,.signup{
  float: right;
}
.signin a{
  color: goldenrod;
    margin-right: 5px;
    font-size: 22px;
}
.signup a{
color: goldenrod;
    font-size: 22px;
  margin-right: 50px;
}
.signup a{
  margin-top: 2px;
  padding: 10px 20px;
  border: 2px solid goldenrod;
  border-radius: 100px;
}
.signin a:hover,.signup a:hover{
  border: 2px solid goldenrod;
  padding: 10px;
  border-radius: 100px;
  background-color: goldenrod;
  color: white;
}
</style>
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
