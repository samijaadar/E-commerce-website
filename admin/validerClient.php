<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
$connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or
die("Please, check your server connection.");
$query = "SELECT email_address, password, nom FROM administrateur
WHERE email_address like '" . $_POST['email'] . "' " .
"AND password like (PASSWORD('" . $_POST['pass'] . "'))";
$result = mysqli_query($connect, $query) or die(mysql_error());
if (mysqli_num_rows($result) == 1) {
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
extract($row);
?>
<meta http-equiv="Refresh" content="0; url=index.php" />
<?php
$_SESSION['email'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
}
}
else {
?>
<h1 style="text-align:center; color:gray;">Adresse email ou mot de passe invalide</h1>
<div class="div">
  <div class="item-div">
Pas Inscrits?<br>
<a href="signup.php">Cliquer ici</a> pour inscription.<br><br><br>  </div>
  <div class="item-div">
<br>
<a href="login.php">Cliquer ici</a> pour ressayer.<br>
</div>  </div>
<?php
 }
?>

</body>
</html>
