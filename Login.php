<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/logins.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<div class="login-content">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<img src="pic/avatar.svg">
				<h2 class="title">S'identifier</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php include('Connexion.php');
if (session_status() == PHP_SESSION_NONE) { session_start(); }
#verfiy if user's information already exsit in the database
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		$query = "SELECT email_address, password, nom FROM client
		WHERE email_address like '" . $_POST['email'] . "' " ."AND password like (PASSWORD('" . $_POST['pass'] . "'))";
		$result = mysqli_query($connect, $query) or die(mysql_error());
				if (mysqli_num_rows($result) == 1) {
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						extract($row);
						echo "<meta http-equiv=\"Refresh\" content=\"0; url=index.php\" />";
						$_SESSION['email'] = $_POST['email'];
						$_SESSION['pass'] = $_POST['pass'];
				 }
			 }
			 #if user's information are not valide
		else
		{ ?>
		<h1 style="text-align:center; color:gray;">Adresse email ou mot de passe invalide</h1>
		    <div class="div">
		            <div class="item-div">
		                 Pas Inscrits?<br>
		                 <a href="Signup.php">Cliquer ici</a> pour inscription.<br>
								</div>
		            <div class="item-div"> <br>
		                <a href="Login.php">Cliquer ici</a> pour ressayer.<br>
								</div>
		    </div>
		<?php
		 }
}?>
