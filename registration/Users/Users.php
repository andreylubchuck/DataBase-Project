<link href="CSS/style.css" rel="stylesheet">

<?php 
include_once 'handler.php'; // ��������� ������������� �� ������������

if($user) { 
// ������� ���������� ��� ������������ 
echo '������, <b>'.$user['username'].'</b>!<br /> 
<a href="exit.php">�����</a><br /> 
';
header( 'Refresh: 5;http://127.0.0.1/DBAlpha/registration/register.php' );
 
 }
 else { 
// ������� ���������� ��� ����� 
echo ' 
<form action="login.php" method="POST"> 
<div>����</div>
	    <fieldset>
	        <p>
	            <label>���</label>
		        <input type="text" name="login" value="" placeholder="login" required>
			    <span>&#10003;</span>
		    </p>

			<br>
		  
		    <p>
	            <label>������</label>
		        <input type="password" name="password" value="" placeholder="********" required>
			    <span></span>
		    </p>
		   
			<br>
         
		</fieldset>
		<div>
		    <input type="submit" value="�����������" /> 
			<a href="register.php">�����������</a><br /> 	
		</div>
	</form>
	';
}


?>

<!Doctype HTML>
<html>
<head>
    <title>����� �����������</title>
	<meta charset="utf-8">
</head>
<body>
    
</body>
</html>