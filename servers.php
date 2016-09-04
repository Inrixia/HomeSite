<html lang="en">
<head>
  <title>Von Spookelton</title>
  <link rel="shortcut icon" type="image/x-icon" href="http://i.imgur.com/M9ECrbH.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <link href="./css/main.css" rel="stylesheet">
  <link href="./css/servers.css" rel="stylesheet">
</head> 

<?php
	error_reporting(0);
  require './src/MinecraftQuery.php';
  require './src/MinecraftQueryException.php';
  require './src/m2w.php';
  
  use xPaw\MinecraftQuery;
  use xPaw\MinecraftQueryException;
  
  $Query = new MinecraftQuery( );
  try
  {
    $Query->Connect( 'up.home', 25568 );

      $infot = $Query->GetInfo( );
      $playerst = $Query->GetPlayers();
      $plyrt = $infot['Players'] . " / " . $infot['MaxPlayers'] . " People Playing...";
      $statt = "Online";
      $numt = "a";
  }
  catch( MinecraftQueryException $e )
  {
  	$Rstatt = $e->getMessage( );
  	$Ostatt = ("Offline");
  }


  $Query = new MinecraftQuery( );
  try
  {
    $Query->Connect( 'up.home', 25567 );

      $ainfot = $Query->GetInfo( );
      $twoplayerst = $Query->GetPlayers();
      $aplyrt = $ainfot['Players'] . " / " . $ainfot['MaxPlayers'] . " People Playing...";
      $astatt = "Online";
      $anumt = "a";
  }
  catch( MinecraftQueryException $e )
  {
  	$TwoRstatt = $e->getMessage( );
  	$TwoOstatt = ("Offline");
  }
?>

<body>
<div id="particles-js"> </div>
	<div class="Box">
		<div class="jumbotron header">
  			<img src="http://i.imgur.com/M9ECrbH.png" class="img-responsive fade-in one">
  			<p class="random fade-in two"></p>
		</div>
		<div align="middle" class="Serv1">
			<div class="jumbotron detail fade-in three">
		    	<h3 class="picin motd"><?php echo MineToWeb($infot['HostName']);?></h3>
		    	<p class="label label-success"><?php echo $statt ?></p>
		    	<p class="plyr"><?php echo $plyrt ?></p>
		  	</div>
		  	<div class="players">
				<?php foreach ($playerst as $playert): ?>
				    <?php echo "<div class=\"col-sm-2 player fade-in\">" ?>
						<img src="<?php echo "https://cravatar.eu/" . "helmhead" . "/" . $playert . "/96" ?>" class="img-rounded picintwo">
		            	<p><?php echo $playert ?></p>
		    		</div>
			<?php endforeach ?>
			</div>
		</div>
	</div>
	<div align="middle" class="Serv2">
			<div class="jumbotron detail fade-in three">
		    	<h3 class="picin motd"><?php echo MineToWeb($ainfot['HostName']);?></h3>
		    	<p class="label label-success"><?php echo $astatt ?></p>
		    	<p class="plyr"><?php echo $aplyrt ?></p>
		  	</div>
		  	<div class="players">
				<?php foreach ($twoplayerst as $aplayert): ?>
				    <?php echo "<div class=\"col-sm-2 player fade-in\">" ?>
						<img src="<?php echo "https://cravatar.eu/" . "helmhead" . "/" . $aplayert . "/96" ?>" class="img-rounded picintwo">
		            	<p><?php echo $aplayert ?></p>
		    		</div>
			<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="butt footer navbar-fixed-bottom">
		<a href="./" class="btn btn-primary col-centered" role="button">Go Back</a>
	</div>
</body>

<script src="./js/particles.js"></script>
<script src="./js/app.js"></script>
<script src="./js/countparticle.js"></script>

<script>
$(document).ready(function() {
    var quotes = new Array("Because Games are Fun.", "Hisss......", "Spooky...", "Whatever you do, Don-", "Unbansheee is beautiful", "Unbansheee is ugly", "Gotcha", "I Host To Play"),
    randno = quotes[Math.floor( Math.random() * quotes.length )];
    $('.random').text( randno );
});
</script>

</html>