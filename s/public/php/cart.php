<?php
require "core.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_SESSION['user'] != '') {
			$conn = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
			} else {
				$id = $_POST['id'];
			}
			
			$user_id = $_SESSION['user'];
			$sql = "SELECT ammount FROM cart WHERE user='$user_id' AND item_id='$id'";
			$result = $conn->query($sql);
			if (isset($_POST['delete'])) {
				$sql = "DELETE FROM cart WHERE user='$user_id' AND item_id='$id'";
				$conn->query($sql);
			} else {
				if (isset($_POST['add'])) {
					$val = 1;
				} else {
					$val = -1;
				}
				$row = $result->fetch_array();
				if($result->num_rows === 0 && $val == 1){
					$sql = "INSERT INTO cart (user, item_id, ammount) VALUES ('$user_id', '$id', '1')";
					$conn->query($sql);
				} elseif ($row['ammount'] == 1 && $val == -1) {
					$sql = "DELETE FROM cart WHERE user='$user_id' AND item_id='$id'";
					$conn->query($sql);
				} elseif ($row['ammount'] >= 1) {
					$sql = "UPDATE cart SET ammount= ammount + $val WHERE user='$user_id' AND item_id='$id'";
					$conn->query($sql);
				}
			}
		} else {
			echoErr("Please Login to change your cart");
		}
	}
?>