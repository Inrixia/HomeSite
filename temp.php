<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="utf-8">
    <style>
    html, body {
    	background-color: black;
    }
	    .Video { 
		    position: absolute;
		    width: 75vw;
		    left: 12vw;
		    top: 10vh;
  			height: auto;
			}
    </style>
  </head>
<script type="text/javascript">
	$( document ).ready(function() {
		vidplay(intro);
		$('.Video').click(function(e) { 
			detectClick(e);
		});
	});
	function detectClick(e) {
		var width = $('.Video').width();
		var height = $('.Video').height();
		if (e.pageX > (width * 0.1) && e.pageX < (width * 0.51)) {
			if (e.pageY > (height * 0.63) && e.pageY < (height * 0.96)) {
				vidplay(Video1);
			}
		} 
		if (e.pageX > (width * 0.55) && e.pageX < (width * 0.69)) {
		 	if (e.pageY > (height * 0.63) && e.pageY < (height * 0.96)) {
		   	vidplay(Video2);
		  }
		} 
		if (e.pageX > (width * 0.78) && e.pageX < width) {
			if (e.pageY > (height * 0.63) && e.pageY < (height * 0.96)) {
				vidplay(Video3);
			}
		}
	}
  function vidplay(vi) {
   $(".Video").each(function() {
   	$(this).css("display", "none");
   });
   $(vi).css("display", "");
   $(vi).get(0).play();
  }    
</script>
<body>        
	<video playsinline autobuffer muted id="Video1" class="Video" preload="auto">
	  <source src="vid/choice one.mov" type="video/mp4" /> 
	  <source src="vid/choice_one.m4v" type="video/mp4" /> 
	</video>
	<video playsinline autobuffer muted id="Video2" class="Video" preload="auto">
	  <source src="vid/choice two.mov" type="video/mp4" /> 
	  <source src="vid/choice_two.m4v" type="video/mp4" /> 
	</video>
	<video playsinline autobuffer muted id="Video3" class="Video" preload="auto">
	  <source src="vid/choice three.mov" type="video/mp4" /> 
	  <source src="vid/choice_three.m4v" type="video/mp4" /> 
	</video>
	<video playsinline autobuffer muted id="intro" class="Video" preload="auto">
	  <source src="vid/intro.mov" type="video/mp4"> 
	  <source src="vid/intro.m4v" type="video/mp4" /> 
	</video>
  </body>
</html>

