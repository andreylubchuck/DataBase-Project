<link href="CSS/style.css" rel="stylesheet">

<?php 
include_once 'handler.php'; // проверяем авторизирован ли пользователь

if($user) { 
// выводим информацию для пользователя 
echo 'Привет, <b>'.$user['username'].'</b>!<br /> 
<a href="exit.php">Выйти</a><br /> 
';
header( 'Refresh: 5;http://127.0.0.1/DBAlpha/registration/register.php' );
 
 }
 else { 
// выводим информацию для гостя 
echo ' 
<form action="login.php" method="POST"> 
<div>Вход</div>
	    <fieldset>
	        <p>
	            <label>Имя</label>
		        <input type="text" name="login" value="" placeholder="login" required>
			    <span>&#10003;</span>
		    </p>

			<br>
		  
		    <p>
	            <label>Пароль</label>
		        <input type="password" name="password" value="" placeholder="********" required>
			    <span></span>
		    </p>
		   
			<br>
         
		</fieldset>
		<div>
		    <input type="submit" value="Авторизация" /> 
			<a href="register.php">Регистрация</a><br /> 	
		</div>
	</form>
	';
}


?>

<!Doctype HTML>
<html>
<head>
    <title>Форма регистрации</title>
	<meta charset="utf-8">
</head>
<body>
    
</body>
</html>