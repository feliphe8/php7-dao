<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

// Carrega um usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega lista de usuarios procurando pelo login

//$busca = Usuario::search("fe");
//echo json_encode($busca);

# Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("feliphe", "123456");
//echo $usuario;

$aluno = new Usuario("aluno", "abc123");
$aluno->insert();
echo $aluno;
 ?>
