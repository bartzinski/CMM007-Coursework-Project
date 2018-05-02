<?php

// Resuming existing session
session_start();

//// Connecting to database
$connect = new mysqli('localhost', 'root', '', 'users');
	
	// Variables
	$username = $_POST['login'];
	$password = $_POST['pass'];
	
	// Taking data from database
	$sql = "SELECT * FROM members WHERE login = '$username' AND pass = '$password'";

	// SQL Query
	$result = $connect -> query($sql);
	
	// IF statement for redirecting particular users to their web pages
	if($result-> num_rows > 0)
	{
        $_SESSION['zalogowany'] = true;
	    $row = $result-> fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['type'] = $row['type'];
		$_SESSION['course'] = $row['course'];
		$_SESSION['team'] = $row['team'];
		
	    if($_SESSION['type'] == 'user'){
	        header('Location: http://localhost/member.php?/');
        } elseif ($_SESSION['type'] == 'admin'){
            header('Location: http://localhost/admin.php?/');
        } elseif ($_SESSION['type'] == 'manager'){
            header('Location: http://localhost/tmanager.php?/');
        } else {
	        echo "This type of user doesn't exist!";
        }


	}
	// Echo statement in case of invaild username or password
	else
	{
		echo "Invalid username or password!";
	}
	
?>