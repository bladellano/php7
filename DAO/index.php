<?php

require_once("config.php");

// LOCANDO
/*$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;
*/

//CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("user");
// echo json_encode($search);

//CARREGA UMA LISTA DE USUÁRIO
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//CARREGA UM USUÁRIO
/*$root = new Usuario();
$root->loadById(1);
echo $root;*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//UPDATE
/*$aluno = new Usuario();
$aluno->loadById(5);
$aluno->update("dellano","123");
echo $aluno;*/

// DELETE
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;

//INSERT
/*$aluno = new Usuario("aluno","123!");
$aluno->insert();
echo $aluno;*/

