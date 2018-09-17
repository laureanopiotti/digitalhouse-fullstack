<?php 
abstract class Cuenta 
{
	private $cbu;
	private $balance;
	private $fecha_ultimo_movimiento;


	public function __construct($cbu)
	{
		$this->cbu = $cbu;
	}

	abstract public function debitar($monto,$cajero);

	public function acreditar($monto){
		$this->getBalance() + $monto;
	}


    public function getCbu()
    {
        return $this->cbu;
    }


    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }


    public function getFechaUltimoMovimiento()
    {
        return $this->fecha_ultimo_movimiento;
    }

    public function setFechaUltimoMovimiento($fecha_ultimo_movimiento)
    {
        $this->fecha_ultimo_movimiento = $fecha_ultimo_movimiento;

        return $this;
    }
}


 ?>