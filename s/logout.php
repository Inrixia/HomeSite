<?php
	session_start();
	$_SESSION['loggedin'] = false;
	$_SESSION['user'] = "";
	$_SESSION['role'] = "";
	header('Location: '.'/s/index.php');
?>