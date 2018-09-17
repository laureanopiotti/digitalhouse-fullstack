<?php 

require 'cliente.php';

class Pyme extends Cliente
{
	private $razonSocial;
	private $cuil;

	public function __construct($email,$pass,$razonSocial,$cuil) {
		parent::__construct($email,$pass);
		$this->razonSocial = $razonSocial;
		$this->cuil = $cuil;
	}


    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

 
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    public function getCuil()
    {
        return $this->cuil;
    }


    public function setCuil($cuil)
    {
        $this->cuil = $cuil;

        return $this;
    }
}

$nuevaPyme = new Pyme('asd@hotmail.com','1234','AlgunaRazon','123456Cuil');

echo $nuevaPyme->getRazonSocial();
echo $nuevaPyme->getCuil();
echo $nuevaPyme->getEmail();


 ?>