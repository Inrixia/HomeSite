<?php
require "core.php";

$passChange = $name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_SESSION['user'];
	$passClear = test_input($_POST["pass-change"]);
	if (empty($_POST["pass-change"])) {
		echoErr("Please enter your password");
	} 
	elseif (isset($_POST['btnChange'])) {
		update_db($name, $passClear);
	}
}
?>