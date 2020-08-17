<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
</head>
<body>
<?php include('TopMenu.php'); include('Connexion.php');?>


    <!-- cover picture  -->
     <div id="showcase">
        <img src="images/pic/back.png" alt="cover">
     </div>
     <!-- end of cover picture   -->


      <section id="showcase1">
        <h1 style="font-size:6vw;color: gold;font-family:'Yellowtail';">Le meilleur</h1>
        <p style="font-size:4vw;font-family:sans-serif;font-weight:bold;">Produit au meilleur prix.</p>
      </section>


        <!-- Categories boxes  -->
        <div class="container-box">
              <div class="item"><a href="listProduct.php?category=telephones"><img src="images/pic/phones.jpg"><button class="btn">Découvrir</button></a></div>
              <div class="item"><a href="listProduct.php?category=livres"><img src="images/pic/books.png"><button class="btn">Découvrir</button></a></div>
              <div class="item"><a href="listProduct.php?category=cameras"><img src="images/pic/cam.jpg"><button class="btn">Découvrir</button></a></div>
        </div>
        <!-- end of categories boxes  -->


          <!--contact section-->
          <footer>
             <div id="contact">
               <div><p><h4>Telephone:</h4>212-060-606-060</p></div>
               <div><p><h4>Mail:</h4>jaadar.sami@gmail.com </p></div>
               <div><p><h4>Adresse:</h4>Morocco</p></div>
             </div>
            <p>Tous droits réservés &copy; </p>
          </footer>
          <!--end of contact section -->


</body>
</html>

<!-- styles-->
<style>
  *{
  margin: 0;
  padding:0;
  text-decoration: none;
  list-style-type: none;
}

#showcase img
{
  width:100%;
  height: auto;
}
#showcase1{
  margin-top: 50px;
  text-align: center;
  overflow: hidden;
  }

.container-box {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 90%;
    margin: 120px auto;
  }

.item {
    overflow: hidden;
    width: 32%;
    position: relative;
    height: 380px;
    margin-bottom: 2%;
    border-radius: 20px;
    text-align: center;
    color: white;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.item img{

    width:100%;
    opacity: 1;
  }

.item .btn {
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: gold;
    color: white;
    font-weight: bold;
    font-size: 20px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
  }
.item .btn:hover {
    background-color: #33ff44;
  }
.item a:link, .item a:visited {
    color: white;
    cursor: auto;
    }

@media screen and (max-width: 800px){
  .item {
    overflow: hidden;
    width: 100%;
    margin-top: 10px;
    height: 300px;
    max-height: 300px;
    margin-bottom: 2%;
    border-radius: 20px;
    text-align: center;
    color: white;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
}
/*footer*/
footer{
  margin-top: 20px;
  padding: 20px;
  color: white;
  background-color: #e8491d;
  text-align:center;
}

#contact{
display:flex;
justify-content: space-around;

height: 150px;
font-weight: bold;
font-size: 20px;
color:white;
font-style: oblique;
}
</style>
<!-- end of style-->
