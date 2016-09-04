<?php
require "public/php/userManagement.php";
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
    <link href="public/css/login.css" rel="stylesheet">
    <script src="public/js/tab.js"></script>

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
    </div>
    <div class="content">
			<div class="panel panel-login">
				<div class="panel-body">
					<form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<p class="login-message"> Welcome.<span class="pl"> Please login.</span></p>
        		<div class="form-group">
          		<input type="text" class="form-control" name="name-login" placeholder="Username">
        		</div>
        		<div class="form-group space-me">
          		<input type="password" class="form-control" name="pass-login" placeholder="Password">
        		</div>
        		<p></p>
        		<div class="info">
	        		<button type="submit" id="login" name="btnLogin" class="btn btn-danger user-login-button">Login</button>
	        		<br>
	        		<br>
	        		<span> Don't have an account yet? <a href="" id="tab-button" class="tab-message">Register</a></span>
	        	</div>
      		</form>
					<form class="new-user-form" style="display: none;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      			<span class="register"> Please enter preferred username & password</span></p>
						<div class="panel-body">
							<div class="new-user-form">
	        			<div class="form-group">
	          			<input type="text" class="form-control" name="name" placeholder="Username">
	        			</div>
	        			<div class="form-group space-me">
	          			<input type="password" class="form-control" name="pass" placeholder="Password">
	        			</div>
	        			<p></p>
	        			<div class="info">
		        			<button type="submit" id="register-btn" name="btnRegister" class="btn btn-danger user-login-button">Register</button>
		        			<br>
		        			<br>
		        			<span> Have an account? <a href="" id="tab-button-login" class="tab-message">Login</a></span>
		        		</div>
	      			</div>
						</div>
					</form>
				</div>
			</div>
		</div>
  </body>
</html>
