<?php

abstract class Animal{

	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}
}

class Cachorro extends Animal{
	public function falar()
	{
		return "Late";
	}

}

class Passaro extends Animal{
	public function falar()
	{
		return "Canta";
	}

	public function mover(){
		return "Voa e ".parent::mover();
	}
}


$passaro = new Passaro();
echo $passaro->falar();
echo "<br/>";
echo $passaro->mover();



