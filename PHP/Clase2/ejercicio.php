<?php
$Nombre = "Laureano";
$Apellido = "Piotti";
$Dni = 39804028;
$Dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sábado","Domingo"];
$DiaSeleccionado = "Lunes";
$Evaluacion = ["Regular","Bueno","Excelente"];
$EvaluacionProporcionada = $Evaluacion[2];

$Porcentaje = [10,20,30];
$Resultado = "<h1>Estimado(a) " . $Nombre . " " . $Apellido . ", portador del DNI: ";
$MensajeFelicitaciones = "";
$Sueldo = 10000;


if ($Dni > 100000000) { 
	 echo "<h2>Por favor ingrese un DNI válido</h2>";
	 return;
	}
	else {
		$Resultado = $Resultado . $Dni;
	 }

if (!in_array($DiaSeleccionado, $Dias)) {
	echo "<h2>Por favor ingrese un día valido</h2>";
	return;
	}
	else {
		$Resultado = $Resultado . " le informamos que el día de hoy: $DiaSeleccionado, de acuerdo al nivel de evaluación obtenido: $EvaluacionProporcionada, ";
	}

if (!in_array($EvaluacionProporcionada,$Evaluacion)) {
	echo "La evaluación debe estar entre Regular, Bueno o Excelente";
	return;
	}


if ($EvaluacionProporcionada == $Evaluacion[0]) {
	$PorcentajeSueldoEnPesos = ($Sueldo * $Porcentaje[0]) / 100;
	$Sueldo = $Sueldo + $PorcentajeSueldoEnPesos;
	$Resultado = $Resultado . " usted ha recibido un aumento del $Porcentaje[0]%, siendo su aumento de: $PorcentajeSueldoEnPesos y su nuevo sueldo de:$Sueldo";
	$MensajeFelicitaciones = "Trabaje más duro!";
}

if ($EvaluacionProporcionada == $Evaluacion[1]) {
	$PorcentajeSueldoEnPesos = ($Sueldo * $Porcentaje[1]) / 100;
	$Sueldo = $Sueldo + $PorcentajeSueldoEnPesos;
	$Resultado = $Resultado . " usted ha recibido un aumento del $Porcentaje[1]%, siendo su aumento de: $PorcentajeSueldoEnPesos y su nuevo sueldo de:$Sueldo";	$MensajeFelicitaciones = "Felicitaciones!";
}

if ($EvaluacionProporcionada == $Evaluacion[2]) {
	$PorcentajeSueldoEnPesos = ($Sueldo * $Porcentaje[2]) / 100;
	$Sueldo = $Sueldo + $PorcentajeSueldoEnPesos;
	$Resultado = $Resultado . " usted ha recibido un aumento del $Porcentaje[2]%, siendo su aumento de: $PorcentajeSueldoEnPesos y su nuevo sueldo de:$Sueldo";	$MensajeFelicitaciones = "Felictaciones, usted ha sobresalido!.";
}



	
echo "$Resultado <br> <hr> $MensajeFelicitaciones";

