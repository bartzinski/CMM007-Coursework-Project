<?php
	// Resuming existing session
    session_start();
	// If user gave proper login details, serwer redirect to redirect.php and then to proper user page
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: redirect.php');
        exit();
    }

?>
<!DOCTYPE HTML>
<html lang = "eng">
<!-- HTML Head Settings -->
<head>
	<meta charset = "utf-8"/>
	<title>RGU Sport</title>
	<meta name = "description" content = "Robert Gordon University Sport Teams Website"/>
	<meta name = "keywords" content = "Robert Gordon University", "RGU", "Aberdeen", "Sport", "Five-a-side football", "Badminton"/>
	<!-- Connecting with CSS file -->
	<link href = "Style.css" rel = "stylesheet" type = "text/css" />
	<!-- Connecting with Fontello CSS file -->
	<link href = "css/fontello.css" rel = "stylesheet" type = "text/css" />
	<!-- Connecting with Google Fonts CSS file -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
	<!-- div "Container" contains all divs from the body section -->
	<div id = "container">
		<!-- div "header_admin" is split into two divs: logo and login -->
		<div id = "header">
			<!-- div "logo" contains image with RGU logo, which is in the same time a hyper link to Official RGU Home Page -->
			<div id = "logo">
			
				<a href = "http://www.rgu.ac.uk/">
				<img src = "rgu.gif" height = "180" width = "700" title ="RGU Official Home Page"/>
				</a>
			</div>
			<!-- div "login" contains a login form connected with connect.php -->
			<div id = "login">
			
				<form action = "connect.php" method = "post">
				Username:   
				<input type ="text" name = "login"/>
					
				Password:
				<input type="password" name ="pass" />
				
				<br /><br />
				
				<input type ="submit" value="Log in" style="position:relative; left: 507px;" />
				</form>
			
			</div>
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
		</div>
	
		<!-- div "image" contains an image, which is in the same time a hyper link to Official RGU Sport Website -->
		<div id = "image">
		
			<a href = "http://www.rgu.ac.uk/student-life/campus-life/rgu-sport/rgu-sport" target = "_blank">
			<img src = "banner.jpg" height = "300" width = "1220" title = "RGU Official Sport Website"/>
			</a>
		
		</div>
		<!-- div "description" contains a header and paragraph with lorem ipsum text -->
		<div id = "description">
		
			<h3>RGU Five-a-side Footbal and Badminton Team Webpage</h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Sed imperdiet bibendum diam, sed maximus turpis scelerisque vitae. Vestibulum tellus magna, luctus at tortor bibendum, auctor auctor ex. 
			Quisque mollis eget lorem in pulvinar. Phasellus tellus lorem, luctus a tortor non, placerat tincidunt lectus. Sed sed ligula tortor. 
			Vestibulum aliquam, massa sit amet condimentum dignissim, nisi orci consequat risus, vel eleifend leo neque nec turpis. 
			Donec bibendum interdum eros, sed laoreet tortor pellentesque nec. </p>
		
		</div>
	
		<!-- div "football" contains an image, which is in the same time a hyper link to Wikipedia website with Five-a-side Football description -->
		<div id = "football">
		What is Five-a-side Football?
		<div style = "clear:both"></div>
			<a href = "https://en.wikipedia.org/wiki/Five-a-side_football" target = "_blank">
			<img src = "football.jpg" height = "300" width = "600" title = "Five-a-side Football"/>
			</a>
		</div>
		<!-- div "badminton" contains an image, which is in the same time a hyper link to Wikipedia website with Badminton description -->
		<div id = "badminton">
		Test your skill in badminton!
		<div style = "clear:both"></div>
			<a href = "https://en.wikipedia.org/wiki/Badminton" target = "_blank">
			<img src = "badminton.jpg" height = "300" width = "600" title = "Badminton"/>
			</a>
		</div>
		<!-- div "map" contains a map, which is connected with Google Maps, shows localization of RGU Sport Center -->
		<div id = "map">
		Where you can find us?
		<div style = "clear:both"></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.066672009872!2d-2.1398756838972526!3d57.118823893277415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48841030f4838f9f%3A0xa302a7afbfff4b1e!2sRGU+Sport!5e0!3m2!1spl!2suk!4v1520952658764" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>
		<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
		<div style = "clear:both"></div>
		<!-- div "footer" is split into four divs: "facebook","youtube","twitter", "contact" -->
		<div id = "footer">
			<!-- div "facebook" contains icon, downloaded from fontello.com, after pressing on it, browser opeans new card, with official RGU facebook profile -->
			<div id = "facebook">
				<a href = "https://www.facebook.com/robertgordonuniversity/" title = " RGU Facebook website link" target = "_blank">
				<i class="icon icon-facebook-rect"></i>
				</a>
			</div>
			<!-- div "youtube" contains icon, downloaded from fontello.com, after pressing on it, browser opeans new card, with official RGU youtube channel -->
			<div id = "youtube">
				<a href = "https://www.youtube.com/user/RobertGordonUni" title = "RGU YouTube website link" target = "_blank">
				<i class="icon icon-youtube"></i>
				</a>
			</div>
			<!-- div "twitter" contains icon, downloaded from fontello.com, after pressing on it, browser opeans new card, with official RGU twitter profile -->
			<div id = "twitter">
				<a href = "https://twitter.com/robertgordonuni" title = "RGU Twitter website link" target = "_blank">
				<i class="icon icon-twitter-bird"></i>
				</a>
			</div>
			<!-- div "contact" contains icon, downloaded from fontello.com, after pressing on it, browser opeans new card, with RGU contact details -->
			<div id = "contact">
				<a href = "http://www.rgu.ac.uk/contact-us/contact-us-and-find-us/" title = "Contact Us" target = "_blank">
				<i class="icon icon-mail"></i>
				</a>
			</div>
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
		<!-- Note on the bottom of the page about author and purpose of the project	-->	
		Project created by Bartosz Rogozinski as a coursework for CMM007 module, Robert Gordon University &copy;	
			
		
		</div>
	
	</div>

</body>

</html>