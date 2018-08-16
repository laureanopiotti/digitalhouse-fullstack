<?php
var_dump($_FILES);
echo "<br>";

echo "Ej2 - c)<br>";
echo "Valores del _GET:<br>";
foreach ($_GET as $index => $value) {
	echo $value."<br>";
} 


echo "<br>";
echo "Ej3)<br>";
echo "Modificar el 'method' del form en el archivo html (formulario.html) y ponerle 'post'<br>";
var_dump($_POST);
echo "<br>";
echo "Notar que en URL no se ve el queryString";
echo "<br>";



$asd = getallheaders();
foreach ($asd as $key => $value) {
	echo "$key $value<br>";	# code...
}
?>