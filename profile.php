<?php
	// Resuming existing session
    session_start();

?>

<!DOCTYPE HTML>
<html lang="eng">
<!-- HTML Head Settings -->
<head>
	<meta charset = "utf-8"/>
	<title>Your Profile</title>
	<meta name = "description" content = "Robert Gordon University Sport Teams Website"/>
	<meta name = "keywords" content = "Robert Gordon University", "RGU", "Aberdeen", "Sport", "Five-a-side football", "Badminton"/>
	<!-- Connecting with CSS file -->
	<link href = "Style.css" rel = "stylesheet" type = "text/css"/>
	<!-- Connecting with Fontello CSS file -->
	<link href = "css/fontello.css" rel = "stylesheet" type = "text/css" />
	<!-- Connecting with Google Fonts CSS file -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<!-- HTML Body Settings -->
<body>
	<!-- div "Container" contains all divs from the body section -->
	<div id = "container">
		<!-- Header is split into three divs, logo, welcome and logout -->
		<div id = "header_profile">
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
		<!-- div "panel_profile" is split into three divs: "table_profile", "upload_form", "picture" and one paragraph -->
		<div id = "panel_profile">
			<!-- div "table_profile" is a table, which displays details of currently logged user -->	
			<div id = "table_profile">
				<table width = "600" border = "5" cellpadding = "5" bordercolor = "f44292" >
						<th>Your Profile</th>
						<tr>
							<td>Username: <?php echo $_SESSION['login']; ?></td> 
						</tr>
						
						<tr>
							<td>Type: <?php echo $_SESSION['type']; ?></td> 
						</tr>
				
						<tr>
							<td>Course: <?php echo $_SESSION['course']; ?></td> 
						</tr>
						
						<tr>
							<td>Team: <?php echo $_SESSION['team']; ?></td> 
						</tr>
				</table>
			</div>
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
			<!-- div "upload_form" contains form and PHP code, which we can use to upload a image from computer -->
			<div id = "upload_form">
			
			<h3>Upload your picture!</h3>
				<form method="POST" action="upload.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
				<div>
					<input type="file" name="image" >
				</div>
				
				<div>
					<button type="submit" name="upload">POST</button>
				</div>
				</form>
				
			<div id = "picture" height = "600" width = "600" >
			
			<?php 
				
				// Code for image upload
				$db = mysqli_connect("localhost", "root", "", "users");
				$sql = "SELECT * FROM members";
				$result = mysqli_query($db, $sql);
				while($row = mysqli_fetch_array($result))
				{
					echo "<div id = 'img_div'>";
						echo "<img src = '".$row['image']."'>";
					echo "</div>";
						
				}
			
			?>

			</div>
			<!-- Lorem ipsum paragraph -->
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Sed imperdiet bibendum diam, sed maximus turpis scelerisque vitae. Vestibulum tellus magna, luctus at tortor bibendum, auctor auctor ex. 
			Quisque mollis eget lorem in pulvinar. Phasellus tellus lorem, luctus a tortor non, placerat tincidunt lectus. Sed sed ligula tortor. 
			Vestibulum aliquam, massa sit amet condimentum dignissim, nisi orci consequat risus, vel eleifend leo neque nec turpis. 
			Donec bibendum interdum eros, sed laoreet tortor pellentesque nec. </p>
			
			</div>
			<!-- div clear:both clears float:left or float: right settings, and setup another divs one under one -->
			<div style = "clear:both"></div>
		</div>
		
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