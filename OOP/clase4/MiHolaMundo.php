<?php 
require ('holamundo.php');
require ('decirMundo.php');
class MiHolaMundo extends Base
{
	use decirMundo;

}

$reloco = new MiHolaMundo;
$reloco->decirHola();
$reloco->decirMundo();
 ?>