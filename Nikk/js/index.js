// Whole page navigation bar, movement of page
var $page = $('.page');

//When button clicked, give attribute shazam to the menu_toggle classed tag in main html document
$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
}); //When button clicked again, take the shazam attribute away from the menu_toggle and content classed tags in main htmol document
$('.content').on('click', function(){
  $page.removeClass('shazam');
});

// Whole page navigation bar, movement of page: after I click a link
var $page = $('.page');

//When links clicked, takeaway attribute shazam to the menu_toggle classed tag in main html document
$('.swingdown').on('click', function(){
  $page.removeClass('shazam');
});
$('.swingdown').on('click', function(){
  $page.removeClass('shazam');
});
$('.swingdown').on('click', function(){
  $page.removeClass('shazam');
});
$('.swingdown').on('click', function(){
  $page.removeClass('shazam');
});



document.getElementById('frmsearch').onsubmit = function() {
    window.location = 'http://www.google.com/search?q= ' + document.getElementById('search').value;
    return false;
}


//Inbuilt Website clock  reference to web page for the code: http://www.ricocheting.com/code/javascript/html-generator/date-time-clock
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

     if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nyear<1000) nyear+=1900;
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+", "+nhour+":"+nmin+":"+nsec+ap+"";
}
window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}


//Functions to allow touch support for mobile
//function touch2Mouse(e)
//{
//  var theTouch = e.changedTouches[0];
//  var mouseEv;

//  switch(e.type)
//  {
//    case "touchstart": mouseEv="mousedown"; break;  
//    case "touchend":   mouseEv="mouseup"; break;
//    case "touchmove":  mouseEv="mousemove"; break;
//    default: return;
//  }

//  var mouseEvent = document.createEvent("MouseEvent");
//  mouseEvent.initMouseEvent(mouseEv, true, true, window, 1, theTouch.screenX, theTouch.screenY, theTouch.clientX, theTouch.clientY, false, false, false, false, 0, null);
  
//  theTouch.target.dispatchEvent(mouseEvent);
//  e.preventDefault();
//}

//document.addEventListener("touchstart", touch2Mouse, true);
//document.addEventListener("touchmove", touch2Mouse, true);
//document.addEventListener("touchend", touch2Mouse, true);