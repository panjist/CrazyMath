<?php
	setcookie('username', '' , time()-3600*24*7,"/panji");
	header("Location: index.php");

?>