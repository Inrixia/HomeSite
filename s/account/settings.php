<?php
require "../public/php/accSettings.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Joe's Frosty Donuts</title>
    <link rel="shortcut icon" href="public/img/logo-small.png"/>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="../public/css/main.css" rel="stylesheet">
    <link href="../public/css/account.css" rel="stylesheet">
    <link href="../public/css/account-settings.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-img-header"><img class="logoimg" src="public/img/logo-text.png"></div>
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
            <a href="index.php"><i class="fa fa-truck"></i> Orders</a>
          </li>
          <li class="active">
            <a href="index.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
          </li>
          <li>
            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
          </li>
        </ul>
        <div class="detail">
          <h1 class="page-header">
            Account Settings
          </h1>
        <form class="change-details-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="center">
            <h3> Enter Password </h3>
            <input type="password" class="form-control" name="pass-change" placeholder="Password">
            </div>
            <br>
            <button type="submit" id="register-btn" name="btnChange" class="btn btn-info user-login-button">Change Password</button>
          
          </form>
          </div>
      </div>
    </div>
  </body>
</html>