<?php 
session_start();
if (isset($_POST['resetear'])) {
	$_SESSION['contador'] = 0;
} else if (isset($_POST['incrementar'])) {
	$_SESSION['contador'] ++;
}

echo $_SESSION['contador'];

if (isset($_POST['favcolor'])) {
	setcookie('favcolor',$_POST['favcolor'],time()+3600);
	$_SESSION['favcolor'] = $_COOKIE['favcolor'];
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>clase 9</title>
 	<style>
		body {
			background-color:<?=$_SESSION['favcolor'] ?>;
		}
	</style>
 </head>
 <body>
 	<br>
 	<a href="modificar.php" title="modificar">volver</a>
 </body>
 </html>
