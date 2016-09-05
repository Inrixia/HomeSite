<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Joe's Frosty Donuts</title>
    <link rel="shortcut icon" href="public/img/logo-small.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="public/css/buy.css" rel="stylesheet">
  </head>
  <body>
		<div class='fullscreenDiv'>
		  <?php
			  if (isset($_POST['total'])) {
			  	$total = $_POST['total'];
			  	session_start();
			  	date_default_timezone_set('UTC');
			  	$date = date("Y-m-d H:i:s");
			  	$user_id = $_SESSION['user'];
			  	$connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
			  	$sql = "INSERT INTO purchases (user_id, total, datepur, status) VALUES ('$user_id', '$total', '$date', 'Ordered')";
			  	$connection->query($sql);
					echo "<p class='center'> Purchased <a style='color: #2ba6cb;'>$$total</a></p>
			  	<a href='/s/index.php'><input type='button' value='Return'></a>
			  	";
			  	$sql = "SELECT * FROM cart WHERE user='$user_id'";
			  	if (!$resultt = $connection->query($sql)) {}
			  	while ($roww = $resultt->fetch_array()) {
			  		$id = $roww['item_id'];
            $sql = "SELECT * FROM products WHERE id='$id'";
            if (!$result = $connection->query($sql)) {}
            while ($row = $result->fetch_array()) {
            	$stock = ($row['stock'] - $roww['ammount']);
            	$sql = "UPDATE products SET stock= $stock WHERE id='$id'";
			  			$connection->query($sql);
			  			$sql = "DELETE FROM cart WHERE user='$user_id'";
							$connection->query($sql);
			  		}
			  	}
		  	} else {
		  		echo "<p class='center'> Nothing Purchased</p>
			  	<a href='/s/index.php'><input type='submit' value='Return'></a>
			  	";
		  	}
		  ?>
	  </div>​
  </body>
</html>