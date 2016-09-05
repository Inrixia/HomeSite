<?php
require "core.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user_id = $_SESSION['user'];
		$connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
		if (isset($_POST['delete'])) {
			$id = $_POST['purch'];
			$sql = "UPDATE purchases SET status= 'Cancelled' WHERE purchase_id='$id'";
			$connection->query($sql);
		} else {
			$id = $_POST['purch'];
			$sql = "UPDATE purchases SET status= 'Shipped' WHERE purchase_id='$id'";
			$connection->query($sql);
		}
	}
?>