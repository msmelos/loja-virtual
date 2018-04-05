<?php 
require_once("logica-usuario.php"); 

deslogaUsuario();

$_SESSION["success"] = "Deslogado com sucesso!!!";

header("location: index.php");
die();
?>
