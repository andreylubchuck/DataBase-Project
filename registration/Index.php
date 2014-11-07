<link href="CSS/style.css" rel="stylesheet">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<?php 
include_once 'handler.php'; 

if ($login) 
{ 
echo 'Привет!, <b>'.$login['login'].'</b>!<br /> 
echo 'Привет!, <b>'.$login['login'].'</b>!<br /> 
- <a href="exit.php">Выход</a><br /> ';
}
else 
{
echo '
		<form id="login-register" method="post" action="login.php">

			<h1 >Авторизация</h1>

			<input type="text" name="login" value="" placeholder="Логин" required>
			<p><br /></p>

			<input type="text" placeholder="Пароль" name="password" autofocus />
			<p><br /></p>

		
			<button type="submit"> Войти </button>
						
</br>
		</form>';
}

?>

<!Doctype HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Вход</title>
	
</head>
<body>
    
	
    
</body>
</html>