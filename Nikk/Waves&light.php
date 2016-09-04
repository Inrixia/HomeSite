<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!--Link to Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="Favicon/Ulearn.ico">
	<!--Links to CSS style sheet-->
	<link href="imgslider/thumbnail-slider.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/normalize.css">
	<script src="https://use.fontawesome.com/2fc75ffe3f.js"></script> <!--Link to font awesome. I have a physical file but this is more efficient-->
	<link rel="stylesheet" href="css/navigation-style.css">
	<link rel="stylesheet" href="css/format-style.css">
	<link rel="stylesheet" href="css/Quizz.css">
	<link rel="stylesheet" href="css/button-style.css">
	<!--Javascript links-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <title>Ulearn Physics - Waves and Light</title>
</head>
<body>

<!--Huge thanks to Jordan/DukeVenator for making this and alowing me to use it without cost. It was rendered and in 4k and designed by Jordan and all credit for the background goes to him-->
<video autoplay loop muted poster="http://i.imgur.com/pQkkLRh.png" id="video-bg"><!--I have a physical copies of all images, uploading it optimises the website-->
	<source src="css/videobackground/GLitch4.webm" type="video/webm">
	Your browser does not support the video tag.
</video>
<!--This video is copyrighted by Jordan/DukeVenator, any and all copies made from it will be flaged and the person responsible, sued.-->

<!--Div class for whole entire page-->
<div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li class="swingdown"><a href="index.php"><i class="icon fa fa-home fa-2x"></i><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
    <li class="swingdown"><a href="Electricity.php"><i class="icon fa fa-bolt fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electricity</a></li>
    <li class="swingdown"><a href="Mechanics.php"><i class="icon fa fa-cogs fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mechanics</a></li>
    <li class="swingdown"><a href="Waves&light.php"><i class="icon fa fa-rss fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waves <br>&nbsp;&nbsp;&nbsp; & Light</a></li>
  </ul>
  <div class="content">
    <div class="content_inner">
		<header class="header"><h1>Ulearn - Waves and Light</h1></header>
		<div class="wrapper">
			<div class="videoWrapper">
				    <!-- Copy & Pasted from YouTube -->
				    <iframe width="560" height="349" src="https://www.youtube.com/embed/UUXpMFMhB7M" allowfullscreen></iframe>
			</div>
			<div class="main">
				<!--Quizz-->
				<div id='container'>
					<div id='title'>
						<h4>Electricty quiz</h4>
					</div>
		   			<br/>
		  			<div id='quiz'></div>
		    		<div class='button' id='next'><a href='#'>Next</a></div><br>
		    		<div class='button' id='prev'><a href='#'>Prev</a></div>
		    		<div class='button' id='start'> <a href='#'>Start Over</a></div>
		    		<!-- <button class='' id='next'>Next</a></button>
		    		<button class='' id='prev'>Prev</a></button>
		    		<button class='' id='start'> Start Over</a></button> -->
		    	</div>
				<!--Quizz end-->
			
			
			</div>
			<aside class="aside"> <!--Side bar-->
				Made by Nikkolas Diehl: 13TM
					<div class="box"> <!--search box-->
						<form id="frmsearch" class="container-1" method="get" action="index.php">
							<span class="icon"><i class="fa fa-search"></i></span>
							<input type="search" id="search" placeholder="Search..." />
						</form>
					</div>
				<br><br>
				<div id="clockbox"></div><br>
				<img id="ulearn" src="http://i.imgur.com/3LpX821.png" alt="Ulearn logo"/><br>
				<div id="message">
					<h2>A message from NZQA</h2><br>
					<h3>Secondary school and NCEA</h3><br>
						New Zealand students must attend school until they are 16 years old. Study at secondary school begins when students are 12 or 13 years old and lasts for about five years, from Year 9 to Year 13. Secondary school is also known as high school or college.<br>
						Most secondary schools in New Zealand are state-owned, and teach a nationally set curriculum. There are also privately owned secondary schools. Most privately owned schools are based on specific philosophic or religious traditions.<br>
						New Zealand's secondary schools offer national qualifications that are recognised by tertiary institutions in New Zealand and internationally. In New Zealand, all national secondary qualifications are monitored and checked by government and sector agencies.<br>
						<br>
					<h3>National Certificate of Educational Achievement (NCEA)</h3>
						NCEA (the National Certificate of Educational Achievement) is the main secondary school qualification in New Zealand.<br>
						NCEA is actually three certificates: it can be awarded at Levels 1, 2 and 3. Students usually begin studying for their NCEA Level 1 in Year 11 and continue through Years 12 and 13 (from ages 15 through to 18).<br>
						Many vocational qualifications are also offered in secondary schools. These include, for example, the National Certificate of Tourism, the National Certificate in Computing, and the National Certificate of Motor Engineering.<br>
						<img id="nzqa" src="http://i.imgur.com/EsglTlu.png" alt="NZQA logo"><br>
						<span class="a">Test number four.</span><br><br>
						<u>You can read more about New Zealand's secondary school system at:</u><br><br>
					<ul id="linksnzqa">
						<li><a href="http://www.education.govt.nz/home/education-in-nz/#Primary">Primary and Secondary schools in NZ (Ministry of Education website)</a></li> 
						<li><a href="http://www.studyinnewzealand.govt.nz/study-options/our-school-system">Our school system (Education New Zealand website)</a></li>
					</ul>
				</div>
			</aside>
		</div>
		<footer class="footer"> <!--Footer bar-->
			<div id="social">
				<div id="share-buttons">
				  <span><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex&t=" target="_blank" title="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-facebook-square fa-2x"></i></a></span>
				  <span><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex&text=:%20http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-twitter-square fa-2x"></i></a></span>
				  <span><a href="https://plus.google.com/share?url=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-google-plus-square fa-2x"></i></a></span>
				  <span><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-tumblr-square fa-2x"></i></a></span>
				  <span><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-pinterest-square fa-2x"></i></a></span>
				  <span><a href="http://www.reddit.com/submit?url=http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-reddit-square fa-2x"></i></a></span>
				  <span><a href="mailto:?subject=&body=:%20http%3A%2F%2Finrix.noip.me%2Fnikk%2Findex" target="_blank" title="Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><i class="fa fa-envelope-square fa-2x"></i></a></span>
				</div>
			</div>
		</footer>
	</div>
  </div>
</div>
<!--Links for js-->
    <script src="js/quizz3.js" type="text/javascript"></script>
	<script src="js/index.js"></script>
</body>
</html>

