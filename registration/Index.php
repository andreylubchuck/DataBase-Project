<link href="CSS/style.css" rel="stylesheet">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<?php 
include_once 'handler.php'; 

if ($login) 
{ 
echo '������!, <b>'.$login['login'].'</b>!<br /> 
echo '������!, <b>'.$login['login'].'</b>!<br /> 
- <a href="exit.php">�����</a><br /> ';
}
else 
{
echo '
		<form id="login-register" method="post" action="login.php">

			<h1 >�����������</h1>

			<input type="text" name="login" value="" placeholder="�����" required>
			<p><br /></p>

			<input type="text" placeholder="������" name="password" autofocus />
			<p><br /></p>

		
			<button type="submit"> ����� </button>
						
</br>
		</form>';
}

?>

<!Doctype HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>����</title>
	
</head>
<body>
    
	
    
</body>
</html>