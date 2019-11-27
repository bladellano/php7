<?php

$conn = new mysqli("localhost","admin","","dbphp7");

if($conn->connect_error){
	echo "Error:".$conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)");

$stmt->bind_param("ss",$login,$pass);
$login = "user";
$pass = "123456";

$stmt->execute();

$login = "caio";
$senha = "nt1@2012";

$stmt->execute();
