
<?php
$MySQLi = new MySQLi("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping");
if ($MySQLi->connect_error) {
    die("Erreur: " . $MySQLi->connect_error);
}
$email_adresse = $_POST["email"];
$nomcomplet = $_POST["nom"];
$password = $_POST["pass"];
if (!filter_var($email_adresse, FILTER_VALIDATE_EMAIL)) {
    echo "<script > alert(\"Adresse email invalide\");</script>\n";
    echo "<meta http-equiv=\"Refresh\" content=\"0; url=login.php\" />";
}
else if (empty($password) || strlen($password)<4){
  echo "<script> alert(\"mot de passe est vide ou tres petit\");</script>";
  echo "<meta http-equiv=\"Refresh\" content=\"0; url=signup.php\" />";
}
else{
$sql = "INSERT INTO administrateur (email_address,password,nom )
VALUES ('$email_adresse',(PASSWORD('$password')), '$nomcomplet')";
if ($MySQLi->query($sql) === TRUE) {
  echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\" />";
} else {
    echo "Erreur: " . $sql . "<br>" . $MySQLi->error;
}}
$MySQLi->close();
?>
?>
