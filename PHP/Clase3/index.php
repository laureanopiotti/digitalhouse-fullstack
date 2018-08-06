<?php
$nombre = "Laureano";
$apellido = "Piotti";
$dni = "39804028";
$dia = 8;
$hoy = "";
$monto = 5000;
$cuotas = 10;
$porcentaje = 20;
$monto_deuda = $monto + $monto * $porcentaje / 100;

switch ($dia) {
	case 1:
	$hoy = "Lunes";
	break;
	case 2:
	$hoy = "Martes";
	break;
	case 3:
	$hoy = "Miercoles";
	break;
	case 4:
	$hoy = "Jueves";
	break;	
	case 5:
	$hoy = "Viernes";
	break;	
	case 6:
	$hoy = "Sábado";
	break;	
	case 7:
	$hoy = "Domingo";
	break;
	default:
	echo "<h2>El día ingresado debe estar entre 1 y 7.</h2>";
	exit;
}

if ($monto > 72000 || $monto < 1000) {
	echo "<h2>El monto debe estar entre $1000 y $72000</h2>";
	exit;
} else if ($cuotas > 36 || $cuotas <= 3) {
	echo "<h2>Las cuotas deben estar entre 3 y 36</h2>";
	exit;
} else if ($porcentaje != 5 && $porcentaje != 10 && $porcentaje != 15 && $porcentaje != 20) {
	echo "<h2>La tasa solo puede disponerse de los siguientes valores: 5%, 10%, 15%, 20%.</h2";
	exit;
}

$cuotas_pagar = [];
for ($i=1 ; $i <= $cuotas ; $i++ ) {
	$cuotas_pagar[$i] = $monto_deuda / $cuotas ;
}


$mensajeExito = "<h1>Estimado(a): $nombre $apellido, el día de hoy: $hoy se le aprobó el crédito de:$$monto, a una tasa del: $porcentaje%, usted debe cancelar un total en pesos de: $monto_deuda, a razón de $cuotas cuotas, y el valor de cada una es de:</h1><br/>";

echo $mensajeExito;

foreach ($cuotas_pagar as $clave => $valor) {
	echo "<h3>Nro. de la cuota: $clave. Monto a pagar: $cuotas_pagar[$clave].</h3><hr>";
}

echo "<h4>Gracias por confiar en nuestro servicio de préstamos en linea...</h4>";
