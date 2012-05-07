<title><?=FB_CONFIG_APP_NAME?></title>
<?php
/*Copyright 2012 indiandragon

This file is part of Random Generator Facebook application.

Random Generator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Random Generator is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Random Generator.  If not, see <http://www.gnu.org/licenses/>.*/

include 'facebook-php-sdk/src/facebook.php';
include 'header.php'; 
?>    

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 

        <script type="text/javascript" src="<?=html_root('scripts/jquery.toastmessage.js')?>"></script>
        
        
        <link type="text/css" href="<?=html_root('scripts/css/jquery.toastmessage.css')?>" rel="stylesheet"/>
        <style> 
            body {
                background: #fff;
                color: #333;
                font: 11px verdana, arial, helvetica, sans-serif;
                text-align:center;
                
            }
            a:link, a:visited, a:hover {
                color: #666;
                font-weight: bold;
                text-decoration: none;
            }
        </style>  
        

<script language="JavaScript">

<!--
var ry










// Start user configuration 

//specify random images below. You can have as many as you wish
  
  var myimages=new Array()
  myimages[1]="http://fbstore.indiandragon.in/randomgenerator/image1.jpg"
  myimages[2]="http://fbstore.indiandragon.in/randomgenerator/image2.jpg"
  myimages[3]="http://fbstore.indiandragon.in/randomgenerator/image3.jpg"
  myimages[4]="http://fbstore.indiandragon.in/randomgenerator/image4.jpg"
  myimages[5]="http://fbstore.indiandragon.in/randomgenerator/image5.jpg"
  myimages[6]="http://fbstore.indiandragon.in/randomgenerator/image6.jpg"

// Caption for the images  
  
  var cap=new Array()
  cap[1]='Uzumaki Naruto'
  cap[2]='Haruno Sakura'
  cap[3]='Hyuuga Neji'
  cap[4]='Rock Lee'
  cap[5]='Saabaku No Gaara'
  cap[6]='Uchiha Sasuke'
  
// Dialogue for the image

var desc=new Array()
desc[1]='I never give up... I never go back on my word... thats the way of the ninja'
desc[2]='All I\'ve been doing is watching you two from behind... now, get a good look at my back'
desc[3]='Iam neji Hyuuga'
desc[4]='A genius, huh? What does that mean?'
desc[5]='I fight for my sake only and live to love no one but myself'
desc[6]='I have long since closed my eyes... My only goal is in the darkness'

// End of user configuration






















// Do not touch this code unless you know what you are doing

function random_imglink(){

  ry=Math.floor(Math.random()*myimages.length)

  if (ry==0){ry=1}
 
     document.write('<div id="div'+ry+'" style="text-align:center"><img id="img'+ry+'" src="'+myimages[ry]+'" border=0><br /></div>')
      document.write('<div id="div'+ry+'" style="text-align:center"><h1>'+cap[ry]+' says, '+desc[ry]+'!!</h1></div>');

}

  random_imglink()

//-->


  

  

//Publish to the wall

function publishToWall() {
 
FB.ui(
   {
     method: 'feed',
     name: '<?=FB_CONFIG_BUTTON_NAME?>',
     link: '<?=FB_CONFIG_ROOT?>',
     picture: myimages[ry],
     caption: cap[ry],
     description: desc[ry],
   },
   function(response) {
     if (response && response.post_id) {
		       	                           $().toastmessage('showSuccessToast', "Post has been published.");
     } else {
		    	                           $().toastmessage('showErrorToast', "Post was not published.");
     }
   }
 );

}

 
  
</script>

<center>
<span style="float: left;"><fb:like href="<?=FB_CONFIG_ROOT?>" layout="standard" show_faces="false" width="400" action="like" font="segoe ui" colorscheme="light"  send="true"/></span>

<h2><?=FB_CONGRATULATION_MESSAGE?></h2>


<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
  });
</script>

<div id="results_options">
<span style="float right;">	
	<a href="#" onclick="publishToWall();"><img src="<?=html_root('images/publish_to_wall.png')?>"/></a>
	<a href="<?=html_root('generate.php?q=0')?>"><img src="<?=html_root('images/retake_quiz.png')?>"/></a>
</span>
</div>


 </center>


<?php include 'footer.php'; ?>
<script>FB.CanvasClient.startTimerToSizeToContent()</script>