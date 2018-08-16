<?php 
    // if($_POST){
    //     var_dump($_POST);
    // }

//Declaro Variables Globales
$descuentoJubilacion = 0;
$descuentoObraSocial = 0;
$sueldoNeto = 0;
$mensajeBienvenida = "";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];
$sueldo_bruto = $_POST['sueldo_bruto'];
$hayRetencion = "";



//Guardo en $descuentoJubilacion el 11% del sueldo bruto
function descuentoJubilacion() {
    $porcentajeJubilacion = 11;
    $GLOBALS['descuentoJubilacion'] = $_POST['sueldo_bruto'] * $porcentajeJubilacion / 100;
}

//Guardo en $descuentoObraSocial el 3% del sueldo bruto
function descuentoObraSocial() {
    $porcentajeObraSocial = 3;
    $GLOBALS['descuentoObraSocial'] = $_POST['sueldo_bruto'] * $porcentajeObraSocial / 100;
}


//Ejecuto las funciones de descuentoObraSocial y Jubilacion, si los datos ingresan por $POST.
if ($_POST) {
    descuentoJubilacion();
    descuentoObraSocial();
    $GLOBALS['sueldoNeto'] = $_POST['sueldo_bruto'] - $descuentoJubilacion - $descuentoObraSocial;
}

//Retencion del 20% si el sueldo neto supera los 35000 pesos. Declaro la funcion
function retencionGanancias(){
    $porcentajeRetencion = 20;
    $GLOBALS['sueldoNeto'] -= $GLOBALS['sueldoNeto'] * $porcentajeRetencion / 100;
}

//Si el sueldoNeto es mayor a 35000, define 'yes' en la variable hayRetencion, luego ejecuta la funcion que le quita retenciones directamente al sueldo neto
if ($sueldoNeto > 35000) {
    retencionGanancias();
    $GLOBALS['hayRetencion'] = "yes";
} 


//Modifica la variable mensajeBienvenida segun el sexo ingresado
if ($_POST['sexo'] == "masculino") {
    $GLOBALS['mensajeBienvenida'] = "Bienvenido";
}   else {
    $GLOBALS['mensajeBienvenida'] = "Bienvenida";
}


//Agrego en un array los datos ingresados por post. El indice del  nuevo array sera el nombre y apellido juntos.
function addData() {
    $arrayData = [];
    foreach ($_POST as $key => $value) {
        $arrayData[$GLOBALS['nombre'].$GLOBALS['apellido']][$key] = $value ;
    }
    return $arrayData;
}

//Ejecuto la funcion para recolectar los datos
$nuevosEmpleados = addData();


//funcion para debugear
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

//Controlo si el array contiene el nombre y apellido con sus respectivos datos
// dd($nuevosEmpleados);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio integrador 1 - Perfil creado</title>
    <style>
        * {
            box-sizing: border-box;
            margin:0;
            padding: 0;
            border:0;
        }

        .container {
            font-family: sans-serif;
            width: 80vw;
            margin: 2% auto;
            display: flex;
            flex-direction: column;
            border:2px solid black;
        }
        .header-container {
            background-color: lightgreen;
            text-align: center;
            border-bottom: 1px solid black;
            padding:1% 2%;
        }

        .main-container {
            display: flex;
            flex-direction: row;
        }

        .silueta {
            display: flex;
            flex-direction:column;
            width: 25%;
            border-right: 1px solid black;
            justify-content: center;

        }

        .silueta img {
            display: block;
            width: 100%;

        }

        .data {
            display: flex;
            flex-direction: column;
            width: 75%;
        }

        .data01 {
            padding: 1% 2%;
            border-bottom:1px solid black;
        }

        .data02 {
            background-color: lightgreen;
            padding:3% 6%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

         .data03 {
            padding:3% 6%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .data04 {
            background-color: lightgreen;
            padding:3% 6%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .data05 {
            padding:3% 6%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="container">
        <header id="header" class="header-container">
            <h1><?php echo "$mensajeBienvenida $nombre !"; ?></h1>
        </header><!-- /header -->

        <main class="main-container">
            <section class="silueta">
                <img src="silueta.png" alt="silueta">
            </section>    

            <section class="data">
                <article class="data01">
                    <h4>Estos son los datos que ingresaste:</h4>    
                </article>


                <article class="data02">
                    <h4>Nombre: <?=$nombre?></h4>
                    <h4>Apellido: <?=$apellido?></h4>
                </article>

                 <article class="data03">
                    <h4>DNI: <?=$dni?></h4>
                    <h4>Género: <?=$sexo?></h4>
                </article>

                 <article class="data04">
                    <h4>Cargo: <?=$cargo?></h4>
                </article>


                 <article class="data05">
                    <h4>Sueldo bruto: <?="$$sueldo_bruto"?></h4>
                    <h4>Sueldo neto: <?="$$sueldoNeto"?></h4>
                    <?php if ($hayRetencion == "yes") : ?>
                     <h5 style="color:red">*el sueldo esta bajo retención de ganancias</h5>
                    <?php endif ?>

                </article>

            </section>
        </main>
    
    </div>
</body>
</html>