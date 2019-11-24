<?php

require_once("config.php");

use Cliente\Cadastro; //Namespace é nome da pasta.

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalmasindeaux@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
