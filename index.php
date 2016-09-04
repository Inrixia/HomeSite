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
  <link href="./css/home.css" rel="stylesheet">
</head>

<body>
<div id="particles-js"> </div>
	<div class="Box">
		<div class="jumbotron header">
  			<img src="http://i.imgur.com/M9ECrbH.png" class="img-responsive fade-in one">
  			<p class="random fade-in two"></p>
		</div>
		<div class="menu row">
			<div class="col-sm-4 servers fade-in three">
				<a href="https://discord.gg/8wUya8z"><img src="http://i.imgur.com/HONQyQ2.png" class="img-responsive picin col-centered"></a>
				<p> Linked Server Chat </p>
			</div>
			<div class="col-sm-4 servers fade-in three">
				<a href="./Servers"><img src="http://i.imgur.com/QQkh86p.png" class="img-responsive picin col-centered"></a>
				<p> Server Status </p>
			</div>
			<div class="col-sm-4 servers fade-in three">
				<a href=""><img src="http://i.imgur.com/m8HlCT2.png" class="img-responsive picin col-centered"></a>
				<p> Coming Soon... </p>
			</div>
		</div>
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