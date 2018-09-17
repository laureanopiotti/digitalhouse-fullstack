<?php 
require ('Profesor.php');

class ProfesorAdjunto extends Profesor
{
	private $horas;

	public function __construct(String $name, String $lname, int $antiquity, int $code, int $horas)
	{
		parent::__construct($name,$lname,$antiquity,$code);
		$this->setHoras($horas);
	}

    public function getHoras()
    {
        return $this->horas;
    }


    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }
}

$profesoradjunto1 = new ProfesorAdjunto('Daniel','Fuentes',15,1020,10);
// echo $profesoradjunto1->getName();
// echo $profesoradjunto1->getLname();
// echo $profesoradjunto1->getAntiquity();
// echo $profesoradjunto1->getCode();
// echo $profesoradjunto1->getHoras();

 ?>