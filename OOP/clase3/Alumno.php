<?php 
class Alumno 
{
	private $name;
	private $lname;
	private $code;

	public function __construct(String $name, String $lname, int $code)
	{
		$this->setName($name);
		$this->setLname($lname);
		$this->setCode($code);
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


    public function getLname()
    {
        return $this->lname;
    }


    public function setLname($lname)
    {
        $this->lname = $lname;

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
}

$alumno = new Alumno('Laureano','Piotti',1010);
echo $alumno->getName();
echo $alumno->getLname();
echo $alumno->getCode();


 ?>