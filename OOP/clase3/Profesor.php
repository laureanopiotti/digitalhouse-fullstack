<?php 
abstract class Profesor 
{
	protected $name;
	protected $lname;
	protected $antiquity;
	protected $code;

	public function __construct(String $name, String $lname, int $antiquity, int $code) 
	{
		$this->setName($name);
		$this->setLname($lname);
		$this->setAntiquity($antiquity);
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


    public function getAntiquity()
    {
        return $this->antiquity;
    }


    public function setAntiquity($antiquity)
    {
        $this->antiquity = $antiquity;

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

// No puedo instanciar porque el profesor ahora es abstracto
// $profesor = new Profesor('Daniel','Fuentes',15,1020);
// echo $profesor->getName();
// echo $profesor->getLname();
// echo $profesor->getAntiquity();
// echo $profesor->getCode();





 ?>