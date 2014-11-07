<?php 
/*include_once 'handler.php'; // проверяем авторизирован ли пользователь

// проверяем авторизацию пользователя 
if($user) { 
setcookie('username', '', time()-1, '/'); 
setcookie('password', '', time()-1, '/'); 
//session_destroy(); 
echo 'You out!'; 
} else { 
echo 'You are not authorization.'; 
} */

<?php 
// Если на страницу пытается зайти не авторизованный 
// пользователь - перенаправляем его на страницу авторизации 
if ( !isset( $_SESSION['username'] ) ) { 
  header( 'Location: register.php' ); 
  die();  
} 
?> 
<html> 
<head> 
<title>Персональная страница</title> 
</head> 
<body> 
</p>Привет, <?php echo $_SESSION['username']; ?>. Это ваша персональная страничка.</p> 
<p>Вы можете закачать свои фотографии, которые смогут посмотреть наши посетители:</p> 
<form action="loadPhoto.php" method="POST" enctype="multipart/form-data"> 
<input type="file" name="uploadfile" /> 
<input type="submit" value="Загрузить" /> 
</form> 
<p>Вы можете посмотреть загруженные ранее фотографии <a href="userPhoto.php">здесь</a>.</p> 
<p>Вы можете отредактировать свои личные данные <a href="editUserInfo.php">здесь</a>.</p> 
</body> 
</html> 
?>

