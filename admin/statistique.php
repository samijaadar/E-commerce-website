<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../styles.css">
    <title></title>
  </head>
  <body >
<header><h1>SAMI</h1></header>
        <div class="container-box">
          <div class="item-sta">
        <table class="table-cart" border="1" align="center" cellpadding="5">
          <caption>Statistique des produits</caption>
          <tr><td>Code</td><td>Titre</td><td>Prix</td><td>Qnt en stock</td><td>Qnt Vendue</td><td>Profit</td></tr>
    <?php
    $totalquantite=0; $totalprix=0; $totalvendue=0; $totalprofit=0;
    $connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or die("Serveur non connecter");
    $query = "SELECT * FROM produits";
    $results = mysqli_query($connect, $query) or die (mysql_query());
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) { extract($row);
        $qtn=0;
    $sql4="SELECT sum(quantite) as somme FROM orders where code='$Code'";
    $results1 = mysqli_query($connect, $sql4) or die (mysql_query());
    $totalprix=$totalprix+($Prix*$Quantite);
    $totalquantite=$totalquantite+$Quantite;
        echo "<tr><td>". $Code."</td>";
        echo "<td>".$Titre. "</td>";
        echo "<td>".$Prix."</td>";
        echo "<td>".$Quantite."</td>";
      if($row1 = mysqli_fetch_array($results1, MYSQLI_ASSOC)){
            extract($row1);
            echo "<td>".$somme."</td>";
      }
      $profit=$somme*$Prix;
      echo "<td>".$profit."</td></tr>";
    $totalvendue=$totalvendue+$somme;
    $totalprofit=$totalprofit+$profit;
    }
    echo "<tr style=\"color:#33eeff \" ><td>Totale</td><td></td><td>$totalprix</td><td>$totalquantite</td><td>$totalvendue</td><td>$totalprofit</td></tr>";
    ?>
    </table>
    </div>
              <div class="item-sta">
              <table class="table-cart" border="1" align="center" cellpadding="5">
                <caption>Statistiques des clients</caption>
              <tr><td>Nom</td><td>Email</td><td>Pays</td><td>Ville</td><td>Nmbr de cmd</td></tr>
              <?php
              $connect = mysqli_connect("sql200.epizy.com", "epiz_25948451", "7nS1gY7cJqNM", "epiz_25948451_shopping") or die("Serveur non connecter");
              $query = "SELECT * FROM client ORDER by ville Desc";

              $results = mysqli_query($connect, $query) or die (mysql_query());
              while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
              extract($row);
              $email=$email_address;
              $sql4="SELECT count(*) as cnt FROM orders where email_address='$email' ";
              $results1 = mysqli_query($connect, $sql4) or die (mysql_query());
              if($row1 = mysqli_fetch_array($results1, MYSQLI_ASSOC)){
                    extract($row1);
              echo "<tr><td>". $nom."</td>";
              echo "<td>".$email_address. "</td>";
              echo "<td>".$pays. "</td>";
              echo "<td>".$ville."</td>";
              echo "<td>".$cnt."</td></tr>";
              }
            }
              ?>
            </table>
              </div>
            </div>


</body>
</html>
<style>
.item-sta {
overflow: hidden;
  width: 48%;
  position: relative;
  margin-bottom: 2%;
  border-radius: 20px;
  text-align: center;
  background-color: black;
  color: white;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
