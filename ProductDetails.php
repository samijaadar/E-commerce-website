<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Produits details</title>
</head>

<?php
include('TopMenu.php');
include('Connexion.php');

$code=$_REQUEST['itemcode'];
$query = "SELECT Code, Titre, Description, Image, Prix,Marque FROM produits " . "where Code like '$code'";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);

?>


<body>
    <div class="container">
        <div class="card">
          <img src="<?php echo $Image ?>" class="img"  style="max-height:280px;width:auto;height:auto;">
            <div class="info">
                <div class="Name">
                    <div>
                        <h1 class="big"><?php echo $Titre ;?></h1>
                        <span class="new">new</span>
                    </div>
                    <h3 class="small"><?php echo $Marque; ?></h3>
                </div>


            <?php
            echo "<form method=\"POST\" action=\"Cart.php?action=ajouter&icode=$Code&iname=$Titre&iprice=$Prix\">";
            ?>
                <div class="buy-price">
                  <input class="buy" type="submit" name="buynow" value="Ajouter">
                    <div class="price">

                        <h1><?php echo $Prix." $"; ?></h1>
                    </div>
                </div>
             </form>

                <div class="description">
                    <h3 class="title">Description</h3>
                    <p class="text"><?php echo $Description;?></p>
                </div>


            </div>
        </div>
    </div>
</body>
</html>
<style>
:root{
    --primary: #2175f5;
}

.container{
    min-height: 90vh;
    display: flex;
    font-family: 'Poppins', sans-serif;
    margin: 10px 20px;
    justify-content: center;
    align-items: center;
    overflow: hidden;

}

.card{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 960px;
}

.img{
    position: relative;
    max-height: 350px;
    width:auto;
    bottom: 20%;
    right: 8%;
}


.info{
    width: 60%;
    background-color: #fff;
    z-index: 1;
    padding: 25px 40px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.Name{
    padding: 10px 10px 40px 10px;
}

.Name div{
    display: flex;
    align-items: center;
}

.Name div .big{
    margin-right: 10px;
    font-size: 2rem;
    color: #333;
    line-height: 1;
}

.Name div .new{
    background-color: var(--primary);
    text-transform: uppercase;
    color: #fff;
    padding: 3px 10px;
    border-radius: 5px;
    transition: .5s;
}

.Name .small{
    font-weight: 500;
    color: #444;
    margin-top: 3px;
    text-transform: capitalize;
}

.Name, .description{
    border-bottom: 1px solid #dadada;
}

.description{
    padding: 60px 10px 30px 10px;
}

.title{
    color: #3a3a3a;
    font-weight: 600;
    font-size: 1.2rem;
    text-transform: uppercase;
}

.text{
    color: #555;
    font-size: 17px;
}

.buy-price{
    padding-top: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.price{
    color: #333;
    display: flex;
    align-items: flex-start;
}

.price h1{
    font-size: 2.1rem;
    font-weight: 600;
    line-height: 1;
}

.price i{
    font-size: 1.4rem;
    margin-right: 1px;
}

.buy{
    padding: .7rem 1rem;
    background-color: var(--primary);
    text-decoration: none;
    color: #fff;
    border: none;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 1.1rem;
}

.buy:hover{
    transform: scale(1.1);
}

@media (max-width: 1070px){
    .img{
        width: 80%;
    }
}

@media (max-width: 1000px){
    .card{
        flex-direction: column;
        width: 100%;
        box-shadow: 0 0 35px 1px rgba(0, 0, 0, 0.2);
    }

    .card > div{
        width: 100%;
        box-shadow: none;
    }

    .img{
        width: 80%;
        top: 55%;
        right: 2%;
    }

}

@media (max-width: 490px){

    .Name div .big{
        font-size: 1.3rem;
    }

    .small{
        font-size: 1rem;
    }

    .new{
        padding: 2px 6px;
        font-size: .9rem;
    }

    .title{
        font-size: .9rem;
    }

    .text{
        font-size: .8rem;
    }

    .buy{
        padding: .5rem .8rem;
        font-size: .8rem;
    }

    .price h1{
        font-size: 1.5rem;
    }

    .price i{
        font-size: .9rem;
    }


    .info{
        padding: 40px;
    }
}

@media (max-width: 400px){

    .container{
    padding: 40px;
    }
}
.product-card{
  background: white;
width: 300px;
max-height: 350px;
margin:20px;
padding: 40px;
border-radius: 30px;
text-transform: uppercase;
box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.product-card h1{
font-size: 22px;
margin-bottom: 4px;
}
.product-card p{
font-size: 13px;
color: #bbb;
}

.product-pic img{
  height: auto;
    width: 100%;
}

.product-colors .active:after{
content: "";
width: 22px;
height: 22px;
border: 2px solid #8888;
position: absolute;
border-radius: 50%;
box-sizing: border-box;
left: -4px;
top: -4px;
}
.product-info{
display: flex;
align-items: center;
}
.product-title{
margin-bottom:30px;
}
.product-price{
color: #7ed6df;
font-size: 26px;
margin-bottom: 20px;
}
.product-button{
margin-left: auto;
color: #7ed6df;
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
