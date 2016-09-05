<?php
  require "/public/php/cart.php";
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
    <link href="public/css/item.css" rel="stylesheet">
    <link href="public/css/button.css" rel="stylesheet">
  </head>
  <body>
  <div class="site-img-header"><img class="logoimg" src="public/img/logo-text.png"></div>
    <div class="nav-wrapper">
      <div class="wrapper-nav">
        <nav class="nav-cont-wrapper navbar">
          <ul class="nav navbar-nav">
            <li><a href="/s/index.php">Donuts</a></li>
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
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = $connection->query($sql);
        while ($row = $result->fetch_array()) {
          $img = "public/img/items/".$row['image_name'];
          $id = $row['id'];
          $details = $row['details'];
          $name = $row['name'];
          $price = $row['price'];
          echo "<div class='item'>
          <h1 class='name'>$name</h1>
          <img src='$img'/>
          <h4 class='details'>$details</h4>
          <h4 class='price'>$$price</h4>
          </div>
          ";
        }
      ?>
      <form action='' method='post' class='item '>
        <?php
          $connection = new mysqli('localhost', 'root', 'Sp00ked', 'frosty');
          $sql = "SELECT stock FROM products WHERE id='$id'";
          $result = $connection->query($sql);
          $row = $result->fetch_array();
          $stock = $row['stock'];
          $user_id = $_SESSION['user'];
          $id = $_GET['id'];
          $sql = "SELECT ammount FROM cart WHERE user='$user_id' AND item_id='$id'";
          $result = $connection->query($sql);
          $row = $result->fetch_array();
          $ammount = $row['ammount'];
          if (($stock - $ammount) > 0) {
            echo "<input type='submit' class='button-add butt' name='add' value='+'>
            ";
          } else {
            echo "<input type='submit' class='button-add butt grey' name='grey' value='+'>
            ";
          }
          if ($ammount > -1) {
            echo "<span class='cart label label-default'>$ammount</span>
            ";
          } else {
            echo "<span class='cart label label-default'>0</span>
            ";
          }
          echo "<input type='submit' class='button-remove butt' name='remove' value='-''>
          <br>
          <input type='submit' class='button-delete butt' name='delete' value='Remove'>
          ";
          if ($stock > -1) {
            echo "<span class='cart label label-default'>$stock In stock</span>
            ";
          } else {
            echo "<span class='cart label label-default'>Out of Stock!</span>
            ";
          }
        ?>
      </form>
  <!--<div class='lab'>
        <span class='label label-primary'>Cart</span>
      </div>-->
    </div>
  </body>
</html>
