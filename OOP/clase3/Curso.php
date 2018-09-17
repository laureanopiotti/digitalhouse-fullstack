<?php 
require_once ('Profesor.php');
require ('ProfesorTitular.php');
require ('ProfesorAdjunto.php');
require ('Alumno.php');

class Curso 
{
	private $name;
	private $code;
    private $profesorAdjunto;
    private $profesorTitular;
    private $cupoMaximo;
    private $listaAlumnos = [];

	public function __construct(String $name, int $code, int $cupoMaximo)
	{
		$this->setName($name);
		$this->setCode($code);
        $this->setCupoMaximo($cupoMaximo);
	}


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


    public function getProfesorAdjunto()
    {
        return $this->profesorAdjunto;
    }


    public function setProfesorAdjunto(ProfesorAdjunto $profesorAdjunto)
    {
        $this->profesorAdjunto = $profesorAdjunto;

        return $this;
    }


    public function getProfesorTitular()
    {
        return $this->profesorTitular;
    }


    public function setProfesorTitular(ProfesorTitular $profesorTitular)
    {
        $this->profesorTitular = $profesorTitular;

        return $this;
    }

    public function getListaAlumnos()
    {
        return $this->listaAlumnos;
    }

    public function setListaAlumnos($listaAlumnos)
    {
        $this->listaAlumnos = $listaAlumnos;

        return $this;
    }


    public function getCupoMaximo()
    {
        return $this->cupoMaximo;
    }


    public function setCupoMaximo($cupoMaximo)
    {
        $this->cupoMaximo = $cupoMaximo;

        return $this;
    }
}


$curso = new Curso('fullstack','666',50);
echo $curso->getName();
echo $curso->getCode();
$curso->setProfesorTitular($profesortitular1);
$curso->setProfesorAdjunto($profesoradjunto1);
echo $curso->getProfesorTitular()->getName();
echo $curso->getProfesorAdjunto()->getName();
var_dump($curso->getListaAlumnos());


 ?>