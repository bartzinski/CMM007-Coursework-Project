<?php
	// Resuming existing session
	session_start();
  
  // IF statment, if upload button is pressed
  
  if (isset($_POST['upload'])) {
	  // Path to store the upload image
	  $target = "".basename($_FILES['image']['name']);
	  
	  // Connecting to database
	  
	  $db = mysqli_connect("localhost", "root", "", "users");
	  
	  // Getting all the submitted data from the form
	  
	  $image = basename($_FILES['image']['name']);
	  $username = $_SESSION['login'];
	  
	  // SQL Update request
	  $sql = "UPDATE members SET image = '$image' WHERE login = '$username' ";
	  
	  // SQL query
	  mysqli_query($db, $sql);
	  
	  // IF statement for moving uploaded file
	  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		  $msg = "Image uploaded successfully";
	  }else{
		  $msg = "There was a problem uploading image";
	  }
	  
	  // If statment TRUE, redirect to Profile.php
	  header('Location: http://localhost/profile.php?/');
	}
?>