<?php
require "./public/php/core.php";
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

    <link href="public/css/main.css" rel="stylesheet">
    <link href="public/css/home.css" rel="stylesheet">
  </head>
  <body>
  <div class="site-img-header"><img class="logoimg" src="public/img/logo-text.png"></div>
    <div class="nav-wrapper">
      <div class="wrapper-nav">
        <nav class="nav-cont-wrapper navbar">
          <ul class="nav navbar-nav">
            <li><a href="/s/index.php" class="alive">Donuts</a></li>
            <li><a href="/s/faq.php">FAQ</a></li>
          </ul>
        </nav>
      </div>
      <?php
      if ($_SESSION['loggedin'] == true) {
        $user_id = $_SESSION['user'];
        $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
        $sql = "SELECT * FROM cart WHERE user='$user_id'";
        $result = $connection->query($sql);
        $num_rows = mysqli_num_rows($result);
        echo ("
          <ul class='nav navbar-right top-nav'>
            <li>
              <a href='/s/cart.php' class='dropdown-toggle'><i class='fa fa-fw fa-shopping-cart'></i> Cart ($num_rows)</a>
            </li>
            <li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> $user_id <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li>
                  <a href='/s/account/account.php'><i class='fa fa-fw fa-gear'></i> Profile</a>
                </li>
                <li>
                  <a href='/s/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                </li>
              </ul>
            </li>
          </ul>
        ");
      } else {
        echo ("
          <ul class='nav navbar-right top-nav'>
            <li>
              <a href='/s/cart.php' class='dropdown-toggle'><i class='fa fa-fw fa-shopping-cart'></i> Cart ($num_rows)</a>
            </li>
            <li class='dropdown'>
              <a href='/s/login'><i class='login-button fa fa-fw fa-gear'></i> Login</a>
            </li>
          </ul>
        ");
      }
      ?>
    </div>
    <div class="content">
      <?php
        $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
        $sql = "SELECT * FROM products";
        if (!$result = $connection->query($sql)) {}
        while ($row = $result->fetch_array()) {
          $img = "public/img/items/".$row['image_name'];
          $id = $row['id'];
          $details = $row['details'];
          $name = $row['name'];
          $price = $row['price'];
          echo "<a href='/s/item.php?id=$id'><div class='item col-xs-4'>
          <img src='$img' class='item'/>
          <h3 class='name'>$name</h3>
          <h4 class='price'>$$price</h4>
          <p class='details'>$details</p>
          </div></a>
          ";
        }
      ?>
    </div>
  </body>
</html>
