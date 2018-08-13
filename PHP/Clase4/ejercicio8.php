<?php 
echo "Hola Mundo.\n";

$nombre = readline("Ingrese su nombre:");

echo "Hola $nombre\n";

$edad = readline("Ingrese su edad:");

if ($edad < 18) {
	echo "Usted no esta autorizado para ingresar al sistema\n";
	exit;
} else {
	echo "Autorización exitosa\n";
}


function hobbyValido($string) {
		return strlen($string) > 3 && strlen($string) < 15;
	}

$hobbies = readline("Ingrese sus hobbies separados por coma:");

$hobbiesArray = explode(",", $hobbies);


$hobbiesResultado = "";

for ($i=0 ; $i < count($hobbiesArray) ; $i++) {
	$preguntarHobby = readline("Usted confirma que le gusta $hobbiesArray[$i]? [si/no]:");
	if ($preguntarHobby == "si" && hobbyValido($hobbiesArray[$i])) {
		$hobbiesResultado .= $hobbiesArray[$i].',';
	} else if ($preguntarHobby == "no") {
		continue;
	} else {
		echo "El hobby ingresado '$hobbiesArray[$i]' no es válido\n";
	}
}

echo "Nombre: $nombre\n";
echo "Edad: 25\n";
echo "Hobbies: $hobbiesResultado\n";

?>