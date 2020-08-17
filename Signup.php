<!DOCTYPE html>
<html>

<head>
	<title>Identification</title>
	<link rel="stylesheet" type="text/css" href="css/logins.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">

		<div class="login-content">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
				<img src="pic/avatar.svg">
				<h2 class="title">S'inscrire</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom d'utilisateur</h5>
           		   		<input type="text" name="nom" class="input">
           		   </div>
                   </div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de passe</h5>
           		    	<input type="password" name="pass" class="input">
            	   </div>
            	</div>

            	<input type="submit" class="btn" value="Login">
            </form>
        </div>

    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>


<?php include('Connexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
					$email_adresse = $_POST["email"];
					$nomcomplet = $_POST["nom"];
					$password = $_POST["pass"];
					# if email is invalide
						if (!filter_var($email_adresse, FILTER_VALIDATE_EMAIL)) {
						    echo "<script > alert(\"Adresse email est invalide\");</script>\n";
						    echo "<meta http-equiv=\"Refresh\" content=\"0; url=Signup.php\" />";
						}
						#if password is invalide or too short
						else if (empty($password) || strlen($password)<4){
						  echo "<script> alert(\"mot de passe est vide ou tres petit\");</script>\n";
						  echo "<meta http-equiv=\"Refresh\" content=\"0; url=Signup.php\" />";
						}
						#if evreything is valide
						#create new user in the database
						else{
						$sql = "INSERT INTO client (email_address,password,nom )
						VALUES ('$email_adresse',(PASSWORD('$password')), '$nomcomplet')";
						$result = mysqli_query($connect, $sql) or die(mysql_error());
						$sql = "INSERT INTO payment_details (email_address) VALUES ('$email_adresse')";
						$result = mysqli_query($connect, $sql) or die(mysql_error());
						echo "<meta http-equiv=\"Refresh\" content=\"0; url=index.php\" />";
						}
}
?>
