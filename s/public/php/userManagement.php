<?php
require "core.php";
$nameClear = $passClear = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['btnLogin'])) {
		if (empty($_POST["name-login"])) {
			echoErr("Please enter a Username");
		}
		else if (empty($_POST["pass-login"])) {
			echoErr("Please enter a Password");
		} else {
			$nameClear = test_input($_POST["name-login"]);
			$passClear = test_input($_POST["pass-login"]);
			login_db($nameClear, $passClear);
		}
	} else if (isset($_POST['btnRegister'])) {
	  if (empty($_POST["name"])) {
	    echoErr("Please enter a Username");
	  } 
	  else if (empty($_POST["pass"])) {
	    echoErr("Please enter a Password");
		} else {
			$nameClear = test_input($_POST["name"]);
			$passClear = test_input($_POST["pass"]);
			write_db($nameClear, $passClear);
			}
  }
}
?>