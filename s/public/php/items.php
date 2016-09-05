<?php
require "core.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
		$id = $_POST['id'];
		$stock = $_POST['stock'];
		if (isset($_POST['delete'])) {
			//$sql = "DELETE FROM products WHERE item_id='$id'";
			//$conn->query($sql);
		} else {
			if (isset($_POST['add'])) {
				$val = 1;
			} else {
				$val = -1;
			}
				$sql = "UPDATE products SET stock= $stock + $val WHERE id='$id'";
				$conn->query($sql);
			}
		}
?>