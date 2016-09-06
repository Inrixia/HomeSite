<?php
  require "../public/php/orders.php";
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
    <link href="../public/css/account-purchases.css" rel="stylesheet">
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
          <li class="active">
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
	         		<li>
	           		<a href='items.php'><i class='fa fa-sitemap'></i> Items</a>
	         		</li>
	         		";
		        }
          ?>
        </ul>
        <div class="container-fluid">
          <h1 class="page-header">Dashboard <small>Purchases Overview</small></h1>
          <div class='purchases_container'>
            <table>
							<tr>
  							<th>ID</th>
   							<th>Date</th> 
    						<th>Total</th>
    						<th>Status</th>
    					</tr>
            <?php
            	$user_id = $_SESSION['user'];
              $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
  						$sql = "SELECT * FROM purchases WHERE user_id='$user_id'";
  						if (!$result = $connection->query($sql)) {}
  						while ($row = $result->fetch_array()) {
  							$id = $row['purchase_id'];
  							$total = $row['total'];
  							$date = $row['datepur'];
  							$status = $row['status'];
  							echo "
                  <tr>
                    <th>$id</th>
                    <th>$date</th>
                    <th>$$total</th>
                ";
                if ($status == 'Cancelled') {
                  $style = 'red';
                } elseif ($status == 'Shipped') {
                  $style = 'green';
                } else {
                  $style = 'orange';
                }
                echo "
                  <th style='color: $style'>$status</th>
                ";
                if ($status == 'Ordered') {
                  echo "<th>
                      <form action='' method='post'>
                        <div class='move'>
                          <a href=''><input name='delete' type='submit' class='button-delete butt' value='Cancel'></a>
                          <input style='display: none;' name='purch' value='$id'>
                        </div>
                      </form>
                    </th>
                  </tr>
                  ";
                }
              }
            ?>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
