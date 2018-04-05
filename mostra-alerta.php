<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

function mostraAlerta($tipo) {

	if(isset($_SESSION[$tipo])) { ?>

		<p class="alert-<?php echo $tipo?>"><?= $_SESSION[$tipo]?></p>
		<?php

		 unset($_SESSION[$tipo]);
	}

}

?>
