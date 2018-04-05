<?php

function usuarioEstaLogado() {

	return isset($_COOKIE["usuario_logado"]);
}


function verificaUsuario() {

	if (!usuarioEstaLogado()) {
   		 header("location: index.php?falhaDeSeguranca=true");
   		 die();
		
	}
}

function usuarioLogado() {

	return $_COOKIE["usuario_logado"];
}

function logaUsuario ($email) {

	setcookie ("usuario_logado",$email); //recupera os dados do email do banco de dados e salva no cookie
}
?>