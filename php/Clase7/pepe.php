<?php 
$request = "https://dev.digitalhouse.com/api/getcomisiones";


$get_comisiones = file_get_contents($request);

echo "<pre>";
var_dump($get_comisiones);
echo "</pre";


$get_comisiones_array = json_decode($get_comisiones,true);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "<pre>";
var_dump($get_comisiones_array);
echo "</pre";
 ?>