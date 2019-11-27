<?php

require_once("config.php");

$usuario = new Usuario();
/*$usuario->login("user","123456");
echo $usuario;*/

//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("user");
echo json_encode($search);

//Carrega uma lista de usuário
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega um usuário
/*$root = new Usuario();
$root->loadById(1);
echo $root;*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/