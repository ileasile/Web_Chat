<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat Room</title>
</head>
<?php 
  $dblocation = "127.0.0.1"; 
  $dbname = "test"; 
  $dbuser = "root"; 
  $dbpasswd = "12345"; 

  $dbcnx = @mysqli_connect($dblocation, $dbuser, $dbpasswd); 
  if (!$dbcnx) 
  { 
    echo "<p>К сожалению, не доступен сервер mySQL</p>"; 
    exit(); 
  } 
  if (!@mysqli_select_db($dbcnx, $dbname) ) 
  { 
    echo "<p>К сожалению, не доступна база данных</p>"; 
    exit(); 
  } 
  $ver = mysqli_query($dbcnx, "SELECT VERSION()"); 
  if(!$ver) 
  { 
    echo "<p>Ошибка в запросе</p>"; 
    exit(); 
  } 
  echo $ver->fetch_row()[0]; 
?> 
<body>
</body>
</html>
