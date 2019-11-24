<?php

class Pessoa {
	
	public $nome;

	public function falar(){
		return "o meu nome é ".$this->nome;
	}
}

$glacio = new Pessoa();
echo '<pre>'; print_r($glacio); echo '</pre>';
