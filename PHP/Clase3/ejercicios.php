<?php 

echo "Printear numeros random entre 10 y 100<br>";

for ($i=1 ; $i <= rand(10,100) ; $i++) {
	echo "$i<br/>";
}

echo "<br>";
echo "<hr>";


echo "Tabla del 2";
echo "<br>";


for ($i=0;$i<=10;$i++){
	echo "2 x $i = " . 2 * $i . "<br>";
}

echo "<br>";
echo "<hr>";

echo "While de 100 a 85<br>";

$x = 100;
while ($x >= 85) {
	echo "$x<br>";
	$x--;
}

echo "<br>";
echo "<hr>";

echo "Doble de contador<br>";

$contador = 1 ;
while ($contador >= 1 && $contador <=5){
	echo $contador * 2 ."<br>";
	$contador++;
}

echo "<br>";
echo "<hr>";

echo "Moneda<br>";

$sale_cara = 0; 
$intentos = 0;
while ($sale_cara < 5) {
	$valor = rand(0,1);
	$intentos++;
	if ($valor == 1) {
		$sale_cara++;
	}
}
echo "Se necesitaron $intentos intentos para sacar 5 veces cara (1).";	

echo "<br>";
echo "<hr>";


echo "Moneda con do-while<br>";

$do_sale_cara = 0;
$do_intentos = 0;
do {
	$valor = rand(0,1);
	$do_intentos++;
	if ($valor == 1) {
	$do_sale_cara++;
}
} while  ($do_sale_cara < 5);

echo "Se necesitaron $do_intentos intentos para sacar 5 veces cara (1).";	

echo "<br>";
echo "<hr>";

echo "Imprimir array</br>" ;
echo "<br>";
$miArray = ["A","B","C","D","E"];
echo "Con for<br>";
for ($i = 0 ; $i < count($miArray); $i++) {
	echo $miArray[$i] . "<br>";
}
echo "<br>";
echo "Con while<br>";
$contador_while = 0;
while ($contador_while < count($miArray)) {
	echo $miArray[$contador_while] . "<br>";
	$contador_while++;
}
echo "<br>";
echo "Con do-while<br>";
$do_contador_while = 0;
do {
	echo $miArray[$do_contador_while] . "<br>";
	$do_contador_while++;
} while ($do_contador_while < count($miArray));

echo "<br>";
echo "Con foreach <br>";
foreach ($miArray as $valor) {
	echo $valor . "<br>";
}

 
echo "<br>";
echo "<hr>";

echo "10 numeros aleatorios<br>";

$miArray_2 = []
for ($i = 0; $i < 10; i++) {
	$miArray_2[] = rand(0,10);
}


