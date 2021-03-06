<?php

interface Veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($velocidade);
}

abstract class Automovel implements Veiculo {

	public function acelerar($v)
	{
		echo "O veículo acelerou até ".$v ." km/h";
	}

	public function frenar($v)
	{
		echo "O veículo frenou até ". $v." km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha ".$marcha;
	}

} //End - Automovel