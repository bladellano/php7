<?php

interface Veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($velocidade);
}

class Civic implements Veiculo {

	public function acelerar($v)
	{
		echo "O veículo acelerou até ".$velocidade ." km/h";
	}

	public function frenar($v)
	{
		echo "O veículo frenou até ". $velocidade." km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha ".$marcha;
	}

}

$carro = new Civic();
$carro->trocarMarcha(1);