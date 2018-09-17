<?php 
require ('Profesor.php');

class ProfesorTitular extends Profesor
{
	private $especialidad;

	public function __construct(String $name, String $lname, int $antiquity, int $code, String $especialidad)
	{
		parent::__construct($name,$lname,$antiquity,$code);
		$this->setEspecialidad($especialidad);
	}

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }
}

$profesortitular1 = new ProfesorTitular('Daniel','Fuentes',15,1020,'SQL');
// echo $profesortitular1->getName();
// echo $profesortitular1->getLname();
// echo $profesortitular1->getAntiquity();
// echo $profesortitular1->getCode();
// echo $profesortitular1->getEspecialidad();

 ?>