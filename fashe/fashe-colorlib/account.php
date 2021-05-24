<?php
	$i = 0;
	session_start();
    require_once('config.php'); 
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Account</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
</head>
<body>

	<div id="container">
		<form method="POST" >
			<label for="name">Login:</label>
			<input type="name" name="login" value = "">
			<label for="username">Password:</label>
			<input type="password" name="password">
			<div id="lower">
				<input type="submit" value="Sign in">
				<?php 
				if ((!isset($_POST['login']) or !isset($_POST['password'])) or( $_POST['login']=="" and $_POST['password']==""));
				else 
				{
					$login = $_POST['login'];
					$password = $_POST['password'];

					$result = mysqli_query($db, "SELECT * FROM account WHERE login='$login'"); 
					if (empty($myrow['password']))
						{
							echo "Sorry, the login or password you entered is incorrect";
							session_unset();
						}
					else 
					{
						if ($myrow['password']==$password) 
						{
							$_SESSION['login']=$myrow['login']; 
							$_SESSION['id']=$myrow['id'];
							$_SESSION['cart_items'] = array();
							$_SESSION['access']=$myrow['access'];
							header ('Location: index.php');
							exit();
						} else
						if (empty($_POST['login']) or empty($_POST['password'])) 
						{
							exit ("You did not enter all the information, go back and fill in all the fields");
						}
						else 
						{
							echo "Sorry, the login or password you entered is incorrect";
							session_unset();
						}
					}
					if (!empty($_SESSION['login']) or !empty($_SESSION['id'])) 
					{
						echo "You entered the site as ".$_SESSION['login']."<br>";
					}
				}
				?>
			</div>
		</form>
	</div>
</body>
</html>
	
