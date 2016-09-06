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
  
  $QuerySky = new MinecraftQuery( );
  $QueryRegrow = new MinecraftQuery( );
  $QueryBlue = new MinecraftQuery( );
  try
  {
    $QueryRegrow->Connect( 'up.home', 25567 );
    $QuerySky->Connect( 'up.home', 25568 );
    $QueryBlue->Connect( 'up.home', 25569 );

      $SkyInfo = $QuerySky->GetInfo( );
      $SkyPlayers = $QuerySky->GetPlayers();
      $SkyPlyr = $SkyInfo['Players'] . " / " . $SkyInfo['MaxPlayers'] . " People Playing...";
      $SkyStatt = "Online";
      $SkyNum = "a";
     
      $RegrowInfo = $QueryRegrow->GetInfo( );
      $RegrowPlayers = $QueryRegrow->GetPlayers();
      $RegrowPlyr = $RegrowInfo['Players'] . " / " . $RegrowInfo['MaxPlayers'] . " People Playing...";
      $RegrowStatt = "Online";
      $RegrowNum = "a";

      $BlueInfo = $QueryBlue->GetInfo( );
      $BluePlayers = $QueryBlue->GetPlayers();
      $BluePlyr = $BlueInfo['Players'] . " / " . $BlueInfo['MaxPlayers'] . " People Playing...";
      $BlueStatt = "Online";
      $BlueNum = "a";
  }
  catch( MinecraftQueryException $e )
  {
  	$SkyOff = $e->getMessage( );
  	$SkyOffStat = ("Offline");
  	$RegrowOff = $e->getMessage( );
  	$RegrowOffStat = ("Offline");
  	$BlueOff = $e->getMessage( );
  	$BlueOffStat = ("Offline");
  }
?>

<body>
<div id="particles-js"> </div>
	<div class="Box">
		<div class="jumbotron header">
  			<img src="http://i.imgur.com/M9ECrbH.png" class="img-responsive fade-in one">
  			<p class="random fade-in two"></p>
		</div>
	</div>
	<div class='row'>
		<div align="middle" class="Sky Cover col-xs-6">
			<div class="jumbotron detail fade-in three">
		   	<h3 class="picin motd"><?php echo MineToWeb($SkyInfo['HostName']);?></h3>
		   	<p class="label label-success"><?php echo $SkyStat ?></p>
		   	<p class="plyr"><?php echo $SkyPlyr ?></p>
		 	</div>
			<div class="players">
			<?php foreach ($SkyPlayers as $SkyPlyr): ?>
			  <?php echo "<div class=\"col-sm-2 player fade-in\">" ?>
					<img src="<?php echo "https://cravatar.eu/" . "helmhead" . "/" . $SkyPlyr . "/96" ?>" class="img-rounded picintwo">
			 		<p><?php echo $SkyPlyr ?></p>
				</div>
			<?php endforeach ?>
			</div>
		</div>
		<div align="middle" class="Regrow Cover col-xs-6">
			<div class="jumbotron detail fade-in three">
			 	<h3 class="picin motd"><?php echo MineToWeb($RegrowInfo['HostName']);?></h3>
			 	<p class="label label-success"><?php echo $RegrowStat ?></p>
			 	<p class="plyr"><?php echo $RegrowPlyr ?></p>
			</div>
			<div class="players">
				<?php foreach ($RegrowPlayers as $RegrowPlyr): ?>
			    <?php echo "<div class=\"col-sm-2 player fade-in\">" ?>
						<img src="<?php echo "https://cravatar.eu/" . "helmhead" . "/" . $RegrowPlyr . "/96" ?>" class="img-rounded picintwo">
			     	<p><?php echo $RegrowPlyr ?></p>
			 		</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div align="middle" class="Blue Cover">
		<div class="jumbotron detail fade-in three">
		 	<h3 class="picin motd"><?php echo MineToWeb($BlueInfo['HostName']);?></h3>
		 	<p class="label label-success"><?php echo $BlueStat ?></p>
		 	<p class="plyr"><?php echo $BluePlyr ?></p>
		</div>
		<?php foreach ($BluePlayers as $BluePlyr): ?>
		  <?php echo "<div class='col-sm-2 player fade-in'>" ?>
				<img src="<?php echo "https://cravatar.eu/" . "helmhead" . "/" . $BluePlyr . "/96" ?>" class="img-rounded picintwo">
		   	<p><?php echo $BluePlyr ?></p>
			</div>
		<?php endforeach ?>
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