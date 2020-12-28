<?php
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
			<input type="name" name="login">
			<label for="username">Password:</label>
			<input type="password" name="password">
			<div id="lower">
				<input type="submit" value="Sign in">
				<?php 

			if (empty($_POST['login']) or empty($_POST['password'])) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
			{
			exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
			}

			$login = $_POST['login'];
			$password = $_POST['password'];

			/*$result = mysqli_query($db, "SELECT id FROM account WHERE login = '$login'");
			$myrow = mysqli_fetch_array($result);*/
			
			

			$result = mysqli_query($db, "SELECT * FROM account WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    		$myrow = mysqli_fetch_array($result);
			if (empty($myrow['password']))
				{
				//если пользователя с введенным логином не существует
				echo "Извините, введённый вами login или пароль неверный.";
				session_unset();
				}
				else {
				//если существует, то сверяем пароли
				if ($myrow['password']==$password) {
				//если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
				$_SESSION['login']=$myrow['login']; 
				$_SESSION['id']=$myrow['id'];
				$_SESSION['cart_items'] = array();
				$_SESSION['access']=$myrow['access'];
				//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
				header ('Location: index.php');  // перенаправление на нужную страницу
   				exit();
				
				}
			else {
				//если пароли не сошлись

				echo "Извините, введённый вами login или пароль неверный.";
				session_unset();

				}
				}
				
			if (!empty($_SESSION['login']) or !empty($_SESSION['id'])) {
				echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
				}
			?>
			</div>
		</form>
	</div>
	
</body>
</html>
	
