<?php 
include_once 'handler.php'; // проверяем авторизирован ли пользователь

// если да, перенаправляем его на главную страницу 
if($login) { 
//header ('Location: index.php'); 
exit(); 
} 

if(!empty($_POST['login']) AND !empty($_POST['password'])) 
{ 
// фильтрируем логин и пароль 
$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));

$search_user = mysql_result(mysql_query("SELECT COUNT(*) FROM `users` WHERE `login` = '".$login."' AND `password` = '".md5($password)."'"), 0);
if($search_user == 0) 
{ 
echo 'The data entered is incorrect or the user is not found.';
exit(); 
} 
else 
{ 
// заносим логин и пароль в куки 
$time = 60*60*24; // сколько времени хранить данные в куках 
setcookie('login', $login, time()+$time, '/'); 
setcookie('password', md5($password), time()+$time, '/'); 
echo 'You have successfully authorized on the site!'; 
exit(); 
} 
} 
echo ' 
<form action="login.php" method="POST"> 
Login:<br /> 
<input name="login" type="text" /><br /> 
Password:<br /> 
<input name="password" type="password" /><br /> 
<input type="submit" value="Authorization" /> 
</form>'; 
?>