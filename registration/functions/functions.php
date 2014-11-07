<?php
$mysqli = false;
function connectDB()//присоеденение к базе данных
{
   global $mysqli; //глобальная переменная
   $mysqli = new mysqli("127.0.0.1", "root", "", "allbase");
   $mysqli->query("SET NAMES 'utf8'");
}

function closeDB()//закрытие базы данных
{
   global $mysqli;
   $mysqli->close();  
}


function getidlogin($login)
{
   global $mysqli; //глобальная переменная
   connectDB();
   //пременная result принимает значение запроса на выборку из базы данных всей информации о пользователе
   $result = $mysqli->query("SELECT * From 'users_profiles' WHERE login ='$login'");
   closeDB();
   //переменная отвечает за массив который содержит все данные пользователя
   $row = $result->fetch_assoc();//преобразовует результат выборки в массив
   return = $row["id"];
}

?>