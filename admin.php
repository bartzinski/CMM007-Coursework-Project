<?php
	// Resuming existing session
    session_start();
	// In case of logout, redirect to index.php
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }

?>

<!DOCTYPE HTML>
<html lang="eng">
<!-- HTML Head Settings -->
<head>
	<meta charset = "utf-8"/>
	<title>Administator WebPage</title>
	<meta name = "description" content = "Robert Gordon University Sport Teams Website"/>
	<meta name = "keywords" content = "Robert Gordon University", "RGU", "Aberdeen", "Sport", "Five-a-side football", "Badminton"/>
	<!-- Connecting with CSS file -->
	<link href = "Style.css" rel = "stylesheet" type = "text/css"/>
	<!-- Connecting with Fontello CSS file -->
	<link href = "css/fontello.css" rel = "stylesheet" type = "text/css" />
	<!-- Connecting with Google Fonts CSS file -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Connecting with Fontello CSS file -->
	<link href = "admin/css/fontello.css" rel = "stylesheet" type = "text/css" />
</head>

<body>
	<!-- div "Container" contains all divs from the body section -->
	<div id = "container">
		<!-- div "header_admin" is split into three divs, logo, welcome and logout -->
		<div id = "header_admin">
			<!-- div "logo" contains image with RGU logo, which is in the same time a hyper link to Official RGU Home Page -->
			<div id = "logo">
			
				<a href = "http://www.rgu.ac.uk/">
				<img src = "rgu.gif" height = "180" width = "700" title ="RGU Official Home Page"/>
				</a>
			</div>
			<!-- div "welcome" displays current user name, next to the "Welcome!" word -->
			<div id = "welcome">
			
				<h1>Welcome! <?php echo $_SESSION['login']; ?></h1>
				
			</div>
			<!-- div "logout" contains logout option, after pressing send as to logout.php, then to index.php page -->
            <div id = "logout_admin"; title = "Log off!">

                <a href = "http://localhost/logout.php">Logout!</a>

            </div>
			
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
		</div>
		<!-- div "team" is a hyper link, after pressing redirects to Admin New Team page, contains a icon downloaded from fontello.com -->
		<a href = "http://localhost/adminnewteam.php">
		<div id = "team"; title = "Add New RGU Team!">
		Enter a new team!
		<i class = "icon-user-plus"></i>
		</div>
		</a>
		
		<!-- div "manager" is a hyper link, after pressing redirects to Admin New Manager page, contains a icon downloaded from fontello.com -->
		<a href = "http://localhost/adminnewmanager.php">
		<div id = "manager"; title = "Add New RGU Manager!">
		Enter a new Member!
		<i class = "icon-male"></i>
		</div>
		</a>
		
		<!-- div "list" is a hyper link, after pressing redirects to Admin Team list page, contains a icon downloaded from fontello.com -->
		<a href = "http://localhost/adminteamlist.php">
		<div id = "list"; title = "Display current RGU Teams!">
		Check current team list!
		<i class = "icon-users"></i>
		</div>
		</a>
		
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