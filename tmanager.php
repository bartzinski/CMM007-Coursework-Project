
<?php
	// Resuming session
    session_start();
	// If logout, redirect to index.php
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
	<title>Team Manager WebPage</title>
	<meta name = "description" content = "Robert Gordon University Sport Teams Website"/>
	<meta name = "keywords" content = "Robert Gordon University", "RGU", "Aberdeen", "Sport", "Five-a-side football", "Badminton"/>
	<!-- Connecting with CSS file -->
	<link href = "Style.css" rel = "stylesheet" type = "text/css"/>
	<!-- Connecting with Fontello CSS file -->
	<link href = "css/fontello.css" rel = "stylesheet" type = "text/css" />
	<!-- Connecting with Google Fonts CSS file -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
	<!-- div "Container" contains all divs from the body section -->
	<div id = "container">
		<!-- div "header_teams" is split into three divs, logo, welcome and logout -->
		<div id = "header_tmanager">
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
            <div id = "logout"; title = "Log off!">

                <a href = "http://localhost/logout.php">Logout!</a>

            </div>
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
		</div>
		<!-- div "sidebar" contains hyperlinks to different webpages in website -->
		<div id = "sidebar">
			<!-- this hyperlink redirect us to user home page -->
			<div class = "option"; title = "Return to RGU Home Page!"><a href ="http://localhost/">Home</a></div>
			<!-- this hyperlink redirect us to user profile page -->
			<div class = "option"; title = "Customize your profile!"><a href ="http://localhost/profile.php">Your profile</a></div>
			<!-- this hyperlink redirect us to RGU Teams page -->
			<div class = "option"; title = "RGU current teams!"><a href ="http://localhost/teams.php">RGU Teams</a></div>
			
		</div>
		<!-- div "news" contains an image, which is in the same time a hyper link to Official RGU News web page-->
		<div id = "news">
		<a href = "http://www.rgu.ac.uk/news-and-events/news/news/" target = "_blank">
		<img src = "news.jpg" height = "200" width = "500" style = "margin-left: 65px;" title = "RGU News!"/>
		</a>
		</div>
		
		<!-- div "classes" contains an image, which is in the same time a hyper link to Official RGU classes web page-->
		<div id = "classes">
		<a href = "http://www.rgu.ac.uk/student-life/campus-life/rgu-sport/facilities/classes/classes/" target = "_blank">
		<img src = "classes1.jpg" height = "200" width = "500" style = "margin-left: 65px;" title = "RGU Sport Timetables"/>
		</a> 
		<!-- div "gym" contains an image, which is in the same time a hyper link to Official RGU gym web page-->
		<div id = "gym">
		<a href = "http://www.rgu.ac.uk/student-life/campus-life/rgu-sport/facilities/gym" target = "_blank">
		<img src = "gym.jpg" height = "200" width = "500" style = "margin-left: 65px;" title = "Get Your Free Membership for RGU's Gym!"/>
		</a>
		</div>
		<!-- div "content" contains a header and paragraph with lorem ipsum text -->
		<div id = "content">
		
		
		
		<h1>Lorem ipsum!</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id tellus orci. Fusce lacinia, mi eget tincidunt ullamcorper, ligula nisi molestie quam, a viverra felis tortor eget velit. 
			Nullam sit amet purus eu libero porta viverra. Integer convallis quis ex nec fringilla. Aliquam pretium euismod est sit amet lobortis. Curabitur iaculis purus tortor, fringilla varius dolor semper sed. 
			Donec at efficitur tellus. Maecenas aliquet purus et lacus scelerisque pellentesque ac eget elit. Aliquam erat volutpat. Proin posuere ornare nunc porttitor vulputate. Integer varius auctor elementum. 
			Nam non neque vitae augue vestibulum varius vel nec tortor. Aliquam volutpat, nunc eget luctus aliquam, nisl dolor consequat erat, vitae efficitur ante lacus ac felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Cras id tellus orci. Fusce lacinia, mi eget tincidunt ullamcorper, ligula nisi molestie quam, a viverra felis tortor eget velit. Nullam sit amet purus eu libero porta viverra. Integer convallis quis ex nec fringilla. 
			Aliquam pretium euismod est sit amet lobortis. Curabitur iaculis purus tortor, fringilla varius dolor semper sed. Donec at efficitur tellus. Maecenas aliquet purus et lacus scelerisque pellentesque ac eget elit. Aliquam erat volutpat. 
			Proin posuere ornare nunc porttitor vulputate. Integer varius auctor elementum. Nam non neque vitae augue vestibulum varius vel nec tortor. Aliquam volutpat, nunc eget luctus aliquam, nisl dolor consequat erat, vitae efficitur ante lacus ac felis.</p>
		
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