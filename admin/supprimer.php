<?php
$MySQLi = new MySQLi("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping");
if ($MySQLi->connect_error) {
    die("Connection failed: " . $MySQLi->connect_error);
}
$id=$_POST["id"];
$sql="DELETE FROM produits WHERE code='$id'";
if ($MySQLi->query($sql) === TRUE) {
	?>
  <meta http-equiv="refresh" content="0; url=index.php" />
	<?php
} else {
    echo "Error: " . $sql . "<br>" . $MySQLi->error;
}
$MySQLi->close();
?>
