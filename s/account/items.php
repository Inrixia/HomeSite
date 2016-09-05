<?php
  require "../public/php/items.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Joe's Frosty Donuts</title>
    <link rel="shortcut icon" href="../public/img/logo-small.png"/>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="../public/css/main.css" rel="stylesheet">
    <link href="../public/css/account.css" rel="stylesheet">
    <link href="../public/css/account-items.css" rel="stylesheet">
    <link href="../public/css/button.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-img-header"><img class="logoimg" src="../public/img/logo-text.png"></div>
    <div class="content">
      <div id="wrapper">
        <ul class="nav side-nav ">
        	<li>
            <a class="user-settings">Account Settings</a>
          </li>
          <li>
            <a href="../index.php"><i class="fa fa-home"></i> Site Home</a>
          </li>
          <li>
            <a href="account.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
            <a href="/s/cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
          </li>
          <li>
            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
          </li>
          <li>
            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
          </li>
          <?php
	          $user_id = $_SESSION['user'];
		        $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
		        $sql = "SELECT * FROM users WHERE username='$user_id'";
		        $result = $connection->query($sql);
		        $row = $result->fetch_array();
		        $role = $row['role'];
		        if ($role == 'admin') {
		        	echo "<li>
            		<a class='user-settings'>Admin Settings</a>
          		</li>
		        	<li>
	           		<a href='/s/account/orders.php'><i class='fa fa-truck'></i> Orders</a>
	         		</li>
	         		<li class='active'>
	           		<a href='items.php'><i class='fa fa-sitemap'></i> Items</a>
	         		</li>
	         		";
		        }
          ?>
        </ul>
        <div class="container-fluid">
          <h1 class="page-header">Admin Dashboard <small>Items Overview</small></h1>
          <?php
            $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
            $sql = "SELECT * FROM products";
            if (!$result = $connection->query($sql)) {}
            while ($row = $result->fetch_array()) {
              $img = "public/img/items/".$row['image_name'];
              $id = $row['id'];
              $name = $row['name'];
              $stock = $row['stock'];
              echo "<a href='/s/item.php?id=$id'><div class='item col-xs-4'>
              <img src='../$img'>
              <h3 class='name'>$name</h3>
              <h4 class='stock'>$stock</h4>
              </a>
              <form class='form' action='' method='post'>
              ";
              echo "<input type='submit' class='button-add butt' name='add' value='+'>
              ";
              if ($stock > 0) {
                echo "<input type='submit' class='button-remove butt' name='remove' value='-''>
                ";
              } else {
                echo "<input type='submit' class='button-remove butt grey' name='grey' value='-'>
                ";
              }
              echo "<input type='submit' class='button-delete butt' name='delete' value='Remove'>
              <input style='display: none;' name='id' value='$id'>
              <input style='display: none;' name='stock' value='$stock'>
              </form></div>
              ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
