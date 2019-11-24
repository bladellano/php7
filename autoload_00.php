<?php

spl_autoload_register(function($nomeClasse){
	if(file_exists("abstracts".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
		require_once("abstracts".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	}
});

spl_autoload_register("incluirClasses");

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse.".php")===true){
		require_once($nomeClasse.".php");
	}
}


/*function __autoload($nomeClasse){
	var_dump($nomeClasse);

require_once("$nomeClasse.php");
}*/

$carro = new DelRey();

$carro->acelerar(80);
