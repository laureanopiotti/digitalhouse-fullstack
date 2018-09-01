<?php 

require('usuario.php');

$lalo = new Usuario('lalo','lalo@gmail.com','1234');

$lalo2 = new Usuario('lalo2','lalo2@gmail.com','1234');


$lalo->saludar();


echo '<br>';

echo $lalo->getNombre();

$lalo->setNombre('Laloncio');

echo $lalo->getNombre();

echo $lalo->getPassword();


$lalo->setPassword('123');

echo $lalo->getPassword();
 ?>