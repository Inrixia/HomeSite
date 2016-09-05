<?php
session_start();
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
  </head>
  <body>
  <div class="site-img-header"><img class="logoimg" src="public/img/logo-text.png"></div>
    <div class="nav-wrapper">
      <div class="wrapper-nav">
        <nav class="nav-cont-wrapper navbar">
          <ul class="nav navbar-nav">
            <li><a href="/s/index.php">Donuts</a></li>
            <li><a href="/s/faq.php" class="alive">FAQ</a></li>
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
            <li class='dropdown'>
              <a href='/s/login'><i class='login-button fa fa-fw fa-gear'></i> Login</a>
            </li>
          </ul>
        ");
      }
      ?>
    </div>
    <div class="faq content">
    <h1> Joe's Frosty Dounts </h1>
    <br>
    <br>
    <h2> About Us </h2>
    <p> We are a organisation dedicated to bringing you the sweetest, most mouth watering dounts you have ever had! </p>
    <br>
    <h2> Contact Us </h2>
    <p> Have a problem or need to get in contact? You can email us at Dounts4Life@Joe.com or Call in at 0800-I-WANT-DOUNT </p>
    </div>
  </body>
</html>
