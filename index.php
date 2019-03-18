<?php 
require_once("Config.php");

//Select sem a Classe Usuario
/*
$sql = new Sql;

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); 
*/

//Carrega apenas um Usuario
/*
$root = new Usuario();

$root->loadById(2);

echo $root;
*/

//Carrega uma Lista de Usuarios
/*
$lista = Usuario::getList();

echo json_encode($lista); 
*/

//Carrega uma lista buscada pelo decriçao do Usuario
/*
$search = Usuario::search("i");

echo json_encode($search);
*/

//SELECT
//Carrega a lista de usuario com autenticação
/*
$usuario = new Usuario();

$usuario->login("Luis", "1234567");

echo $usuario;
*/
/*
//INSERT
$aluno = new Usuario("Fernando", "987654");

$aluno->insert();

echo $aluno;
*/

//UPDATE
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("Rogerio", "041090");

echo $usuario;

 ?>
