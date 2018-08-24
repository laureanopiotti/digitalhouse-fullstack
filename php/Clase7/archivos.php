<?php 
if (file_exists('texto.txt')) {
	fopen('texto.txt', 'a');
	echo "El archivo existe";
}	else {
		$gestor = fopen('texto.txt', 'w+');
		echo "El archivo NO existe";
}

$holaMundo = "" ;

for ($i = 0 ; $i < 100 ; $i++) {
	$holaMundo .= "Hola Mundo! testing. <br>";
}

fclose($gestor);
 ?>