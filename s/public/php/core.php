<?php
session_start();

function echoErr($err) {
  echo "<script type='text/javascript'>alert('$err');</script>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}

function write_db($name, $pass) {
	$conn = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
	$sql = "INSERT INTO users (username, pass) VALUES ('$name', '$pass')";

	if ($conn->query($sql) === TRUE) {
		$_SESSION['loggedin'] = true;
  	$_SESSION['user'] = $name;
  	header('Location: '.'/s/index.php');
	} else {
  	echoErr("Username allready exists");
	}

	$conn->close();
}

function update_db($name, $pass) {
	$conn = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
	$sql = "UPDATE users SET pass='$pass' WHERE username='$name'";

	if ($conn->query($sql) === TRUE) {
		echoErr("Password Changed!");
	}

	$conn->close();
}

function login_db($namelogin, $passlogin) {
	$conn = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
	$sql = "SELECT role FROM users WHERE username='$namelogin' AND pass='$passlogin'";
	$result = $conn->query($sql);

	if($result->num_rows === 0){
      echoErr("Incorrect username/password...");
    } else {
		  $_SESSION['loggedin'] = true;
		  $_SESSION['user'] = $namelogin;
		  $_SESSION['role'] = mysqli_num_rows($result);
		  echoErr(mysqli_num_rows($result));
		  header('Location: '.'/s/index.php');
	}

	$conn->close();
}
?>