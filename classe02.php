<?php

class Carro{

	private $motor;
	private $ano;
	private $modelo;

	public function getMotor():float
	{
		return $this->motor;
	}

	public function setMotor($motor)
	{
		$this->motor = $motor;
		return $this;
	}


	public function getAno():int
	{
		return $this->ano;
	}

	public function setAno($ano)
	{
		$this->ano = $ano;
		return $this;
	}


	public function getModelo()
	{
		return $this->modelo;
	}

	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
		return $this;
	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	} 

}//End - Class

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

echo '<pre>'; var_dump($gol); echo '</pre>';