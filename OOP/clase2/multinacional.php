<?php 

require 'cliente.php';

class Multinacional extends Cliente
{
	private $razonSocial;
	private $cuil;
	private $pais;

	public function __construct($email,$pass,$razonSocial,$cuil,$pais) {
		parent::__construct($email,$pass);
		$this->razonSocial = $razonSocial;
		$this->cuil = $cuil;
		$this->pais = $pais;
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

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }
}

$nuevaMulti = new Multinacional('multi@asd.com','multiPassword','RazonMultiancional','1234CuilMultinacional','ArgentinaPais');

echo $nuevaMulti->getEmail();
echo $nuevaMulti->getPass();
echo $nuevaMulti->getRazonSocial();
echo $nuevaMulti->getCuil();
echo $nuevaMulti->getPais();



 ?>