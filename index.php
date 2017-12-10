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
$search = Usuario::search("j");
echo json_encode($search);

?>