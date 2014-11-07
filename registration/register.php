<?PHP header("Content-Type: text/html; charset=utf-8");?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="CSS/style.css" rel="stylesheet">

<?php 
try{	
require_once 'handler.php'; // проверяем авторизирован ли пользователь

// если да, перенаправляем его на главную страницу 

if (!empty($_POST['login']) && !empty($_POST['password'])) 
{ 
// фильтруем логин и пароль 
$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));

// проверяем есть ли логин в нашей базе данных 
if (!mysql_query("SELECT COUNT(*) FROM `users` WHERE `login` = '".$login."' LIMIT 1;"))
{ 
throw new Exception("Выбраный логин уже зарегестрирован");
 
} 
//пароль кодируем в md5
mysql_query("INSERT INTO `users` (`login`, `password`) VALUES ('".$login."', '".md5($password)."')");
} 

// форма регистрации 
	
	echo ' 

<form action="register.php" method="POST"> 
<div text-align:  center;>
		 Регистрация
		</div>
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
		    <p>
	            <label>Повторите</label>
		        <input type="password" name="password" value="" placeholder="********" required>
			    <span>&#10003;</span>
		    </p>
			<br>
         
		</fieldset>
		<div>
		    <input type="submit" value="Registration" /> 
		</div>
	</form>
	';
}
catch(Exception $a)
{echo "Вывод ошибки: " + $a->getMessage();}
?>
