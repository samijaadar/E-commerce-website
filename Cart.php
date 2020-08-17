<html>
<?php
include('TopMenu.php');include('Connexion.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$sess = session_id();
$action="";
$quantite="";
$query="";

if (isset($_POST['quantite'])) {
    $quantite = trim($_POST['quantite']);
}

if ($quantite==''){
   $quantite=1;
}
if($quantite <=0){
    echo "Quantite est invalide ";
}

else {
      if (isset($_REQUEST['icode'])) { $itemcode = $_REQUEST['icode'];}
      if (isset($_REQUEST['iname'])) { $item_name = $_REQUEST['iname'];}
      if (isset($_REQUEST['iprice'])) { $prix = $_REQUEST['iprice'];}
      if (isset($_POST['modified_quantite'])) { $modified_quantite = $_POST['modified_quantite'];}
      if (isset($_REQUEST['action'])) {$action = $_REQUEST['action'];}

      #on a quatres actions possible: ajouter , changer ,supprimer produits ou vider le panier.
      switch ($action) {

          case "ajouter":
                $query="select * from panier where id_sess = '$sess' and p_code like'$itemcode'";
                $result = mysqli_query($connect, $query) or die(mysql_error());
                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $qt=$row['p_quantite'];
                    $qt=$qt + $quantite;
                    $query="UPDATE panier set p_quantite=$qt where id_sess = '$sess' and p_code like '$itemcode'";
                    $result = mysqli_query($connect, $query) or die(mysql_error());
                }
                else
                {
                    $query = "INSERT INTO panier (id_sess, p_quantite, p_code,p_titre, p_prix)
                    VALUES ('$sess', $quantite, '$itemcode','$item_name', $prix)";
                }
          break;

          case "changer":
                if($modified_quantite==0) {
                    $query = "DELETE FROM panier WHERE p_sess = '$sess' and p_code like '$itemcode'";
                }
                else {
                    if($modified_quantite <0) {
                      echo "Quantite invalide";
                    }
                    else {
                        $query = "UPDATE panier SET p_quantite = $modified_quantite WHERE id_sess = '$sess' and p_code like '$itemcode'";
                    }
                }
          break;

          case "supprimer":
                $query = "DELETE FROM panier WHERE id_sess = '$sess' and p_code like
                '$itemcode'";
                break;

          case "vider":
                $query = "DELETE FROM panier WHERE id_sess = '$sess'";
          break;
      }

          if($query !="")
          {
              $results = mysqli_query($connect, $query) or die(mysql_error());
          }

          echo "<SCRIPT LANGUAGE=\"JavaScript\">updateCart();</SCRIPT>";
}

#calcule du montant totale du panier

$totalquantite=0;
$query="SELECT * from panier where id_sess = '$sess'";
$results = mysqli_query($connect, $query) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    extract($row);
    $totalquantite = $totalquantite + $p_quantite;
}

#affichage du panier
if ( ! isset($MontantTotal)) {
    $MontantTotal=0;
}
$totalquantite=0;
$query = "SELECT * FROM panier WHERE id_sess = '$sess'";
$results = mysqli_query($connect, $query) or die (mysql_query());
if(mysqli_num_rows($results)==0){
    echo "<div style=\"width:200px; margin:auto;\">Votre panier est vide</div> ";
}
else {
      ?>
      <div class="container">
            <div class="item-cart">
                <table class="table-cart" cellpadding="5">
                  <tr><td>Code</td><td>Quantite</td><td>Titre</td><td>Prix</td><td>Prix Totale</td>
                  <?php
                  while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                      extract($row);
                      echo "<tr><td>". $p_code."</td>";
                      echo "<td><form method=\"POST\" action=\"Cart.php?action=changer&icode=$p_code\">
                      <input type=\"text\" name=\"modified_quantite\" size=\"2\"
                      value=\"$p_quantite\"></td>";
                      echo "<td>".$p_titre. "</td>";
                      echo "<td>".$p_prix."</td>";
                      $totalquantite = $totalquantite + $p_quantite;
                      $totalprix = number_format($p_prix * $p_quantite, 2);
                      $MontantTotal=$MontantTotal + ($p_prix * $p_quantite);
                      echo "<td>".$totalprix."</td>";
                      echo "<td><input type=\"submit\" name=\"Submit\" value=\"Changer Quantite\"></form></td><td>";
                      echo "<form method=\"POST\" action=\"Cart.php?action=supprimer&icode=$p_code\">";
                      echo "<input type=\"submit\" name=\"Submit\" value=\"Supprimer\"></form></td></tr>";
              }
                  echo "<tr color:blue \" ><td>Totale</td><td>$totalquantite</td><td></td><td></td><td>";
                  $MontantTotal = number_format($MontantTotal, 2);
                  echo $MontantTotal;
              echo "</td></tr></table><br>";?>

              <table style="margin:auto;">
                  <tr><td style="padding: 10px;">
                  <form method="POST" action="Cart.php?action=vider">
                       <input type="submit" name="Submit" value="Vider" style="font-family:verdana; font-size:150%;" >
                  </form></td><td>

                  <form method="POST" action="SigninVerification.php">
                       <input id="PanierMontant" name="PanierMontant" type="hidden" value= "<?php echo $MontantTotal ; ?>">
                       <input type="submit" name="Submit" value="Checkout" style="font-family:verdana; font-size:150%;" >
                  </form>
                  </td></tr>
              </table>
            </div>
      </div>
<?php
} ?>
</body>



<style>
*{
  font-weight: bold;
}

.table-cart{
  margin-top: 20px;
  border-radius: 10px;
    border: 1px solid red;
  width: 100%;
}
.item-cart{
  margin-left: 100px;
  width: 80%;
  height: 400PX;
  padding: 20px;
  border: 1px solid red;
  border-radius: 20px;
  text-align: center;
}
.container{
  width:80%;
  margin:auto;
  overflow: hidden;
  height: 100%;
}

</style>
</html>
