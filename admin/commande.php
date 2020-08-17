<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles.css">
    <title></title>
  </head>
  <body>
    <header><h1>SAMI</h1></header>
            <div class="container-box">
    <div class="item-2">
    <table class="table-cart" border="1" align="center" cellpadding="5">
    <caption>Statistique des commandes</caption>
    <tr><td>Cmd</td><td>Email</td><td>Date</td><td>Code</td><td>Qauntite</td><td>Produit</td></tr>
    <?php
    $connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or die("Serveur non connecter");
    $query = "SELECT * FROM orders ";
    $results = mysqli_query($connect, $query) or die (mysql_query());
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) { extract($row);
      echo "<tr><td>". $order_no."</td>";
      echo "<td>".$email_address. "</td>";
      echo "<td>".$cmd_date. "</td>";
      echo "<td>".$code."</td>";
      echo "<td>".$quantite."</td>";
      echo "<td>".$nomP."</td></tr>";}

  ?>
</table>
  </div>
</div>
  </body>
</html>
<style>
.item-2 {
overflow: hidden;
  width: 100%;
  position: relative;
  margin-bottom: 2%;
  border-radius: 20px;
  text-align: center;
  background-color: black;
  color: white;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
