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
					echo "<p class='center'> Purchased <a style='color: #2ba6cb;'>$$total</a></p>
			  	<input type='button' value='Return'>
			  	";
		  	} else {
		  		echo "<p class='center'> Nothing Purchased</p>
		  		<form action='/s/index.php'>
			  		<input type='submit' value='Return'>
			  	</form>
			  	";
		  	}
			  
		  ?>
	  </div>​
  </body>
</html>
<script type="text/javascript">
    document.getElementById("full").onclick = function () {
        location.href = "/s/index.php";
    };
</script>