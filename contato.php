<?php 
require_once("cabecalho.php");
?>

<h1>Contato</h1>
<form action="envia-contato.php" method="post">
    <table class="table">
		<tr>
		    <td>Nome</td>
		    <td><input class="form-control" type="text" name="nome" value="" /></td>
		</tr>
		<tr>
		    <td>email</td>
		    <td><input class="form-control" type="email" name="email" value="" /></td>
		</tr>
		<tr>
		    <td>Mensagem</td>
		    <td><textarea class="form-control" name="mensagem"></textarea></td>
		</tr>
	    <tr>
	        <td><button class="btn btn-primary" type="submit">Enviar</button></td>
	    </tr>
	</table>
</form>

<?php require_once("rodape.php"); ?>
