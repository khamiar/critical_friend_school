<?php
	session_start();
	unset($_SESSION["USERNAME"]);
	unset($_SESSION["ROLE"]);
	session_destroy();
	header("location:index.php");
	
?>