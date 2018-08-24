<?php
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CLASE9</title>
	<style>
		body {
			background-color:<?=$_SESSION['favcolor']?>;
		}
	</style>

</head>
<body>
	<form action="mostrar.php" method="post">
		<input type="submit" name="resetear" value="RESET">
		<input type="submit" name="incrementar" value="INCREMENT">
		<br>
		<br>
		 <span>favorite color</span>
		<select name="favcolor">
			<option value="blue">blue</option>
			<option value="red">red</option>
			<option value="yellow">yellow</option>
			<option value="default">default</option>
		</select>
	</form>
</body>
</html>