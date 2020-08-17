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
