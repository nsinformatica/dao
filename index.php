<?php
require_once("config.php");
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);u

//carrega um usuario

//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);
// carrega uma lista de usuários buscando pelo login 
//$search = Usuario::search("jo");
//echo json_encode($search);
// carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jose", "12345678");
//echo $usuario; 
//criando um novo usuario
/*
$aluno = new Usuario("bolado", "boladao123");
$aluno->insert();
echo $aluno;
*/
//Alterando um usuario 
/*
$usuario = new Usuario();
$usuario->loadById(12);
$usuario->update("novo", "novoDoze");
echo $usuario;
*/

 
//Apagando um usuario
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

?>