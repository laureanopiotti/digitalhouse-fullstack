<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor' . $varN . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $varN . 'es falso.';
    }
}

tipoDato($variable10);


$miarray = ["Elefante","Leon","Serpiente","Ballena","Dinosaurio","Hormiga","Halcon"];
$miarray[0] = "CHAUelefante";
$miarray[100] = "soyel100";
$miarray[16] = "soy el 16";

var_dump($miarray);

echo "<br>";

echo "Me gustan los animales $miarray[0] $miarray[1] $miarray[2] $miarray[3] $miarray[4] $miarray[5] $miarray[6], $miarray[100], $miarray[16]";


echo "<br>";
echo "<br>";
echo "<br>";

$arrayAsociativo = [
	"Marca" => "Toyota",
	"Modelo" => "",
	"Color" => "",
	"Año" => "",
	"Patente" => "aaa 100",

	];
$arrayAsociativo[0] = "Soy Fabian el Dueño";
$arrayAsociativo["Poliza"] = "1285215812";
$arrayAsociativo["Patente"] = "BBB 200";
$arrayAsociativo[0] = "Soy el nuevo dueño";

echo "<br>";
var_dump($arrayAsociativo);

echo "<pre>";
var_dump($arrayAsociativo);
echo "</pre>";

echo "<br>";
echo "<br>";

echo $arrayAsociativo["Marca"];
echo $arrayAsociativo[0];


echo "<br>";

$entero = 20;
$decimal = 10.5;

echo $entero + $decimal;
echo "<br>";
echo $entero - $decimal;
echo "<br>";
echo $entero / $decimal;
echo "<br>";
echo $entero * $decimal;

$division = $entero / $decimal;
echo "<br>";
echo $division;
echo "<br>";
$entero += 1;
$decimal += 1;
echo $entero;
echo "<br>";
echo $decimal;

echo "<br>";
echo "<br>";

$entero += 5;
$decimal -= 0.6;
echo $entero;
echo "<br>";
echo $decimal;
echo "<br>";

$resultado = ($entero * 2 + $decimal) / ($entero / 2);
echo $resultado;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$hola = "Hola";
$mundo = "Mundo!";
$holamundo = $hola . " " . $mundo;
echo $holamundo;
echo "<br>";

$ultimostring = $holamundo . " " . "qué bueno que esta PHP";
echo $ultimostring;

echo "<br>";
echo "<br>";

$gg = "Holagg";
echo $gg,"asd";

echo "<br>";


?>