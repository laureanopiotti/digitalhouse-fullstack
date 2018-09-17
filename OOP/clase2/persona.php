<?php 

require 'cliente.php';

class Persona extends Cliente
{
	private $nombre;
	private $apellido;
	private $documento;
	private $nacimiento;

	public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass) {
		parent::__construct($email,$pass);
		$this->nombre = $nombre;
	    $this->apellido = $apellido;
	    $this->documento = $documento;
	    $this->nacimiento = $nacimiento;
	}



    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }


    public function getDocumento()
    {
        return $this->documento;
    }


    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }


    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;

        return $this;
    }
}

$nuevaPersona = new Persona('Laureano','Piotti','39804028','25/06/1996','laureanopiotti@gmail.com','123456');

echo $nuevaPersona->getNombre();
echo $nuevaPersona->getApellido();
echo $nuevaPersona->getDocumento();
echo $nuevaPersona->getNacimiento();
echo $nuevaPersona->getEmail();
echo $nuevaPersona->getPass();


 ?>