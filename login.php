<?php 
 session_start();
require_once ("banco-usuario.php");
require_once ("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido!!!";
   	header("location: index.php");

} else {
	
	logaUsuario ($usuario["email"]) ; //recupera os dados do email do banco de dados e salva no cookie

	$_SESSION["success"] = "Logado com sucesso!!!";
    header("Location: index.php");
}
die();
