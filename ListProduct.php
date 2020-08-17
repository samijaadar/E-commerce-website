<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
</head>

<body>
<?php include('TopMenu.php');
include('Connexion.php');?>

              <div class="container-box">
              <?php
              $Category=$_REQUEST['category'];
              $query = "SELECT Code, Titre, Description, Image,Marque, Prix FROM produits " .
              "where Categorie like '$Category' order by Code";
              $results = mysqli_query($connect, $query) or die(mysql_error());
              $x=1;
              while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                      extract($row); ?>

                      <div class="product-card">
                          <div class="product-pic">
                            <?php
                            echo '<img src=images/'.$Image .'> </img><br>'
                            ?>
                          </div>

                      <div class="product-title">
                          <h3><?php echo $Titre ;?></h3>
                          <h5><?php echo $Marque ;?></h5>
                      </div>


                      <div class="product-info">
                            <div class="product-price">$<?php echo $Prix ;?></div>
                            <?php
                            echo "<a href=ProductDetails.php?itemcode=$Code class=\"product-button\">";?> Voir</a>
                            </div>
                            </a>
                      </div>
                  <?php
              }
              ?>
            </div>
</body>
</html>

