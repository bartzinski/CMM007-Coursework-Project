<?php
	// Resuming existing session
    session_start();
	// Connecting to database
    $connect = mysqli_connect('localhost', 'root', '', 'users');
	// Connection check with database
    if(!$connect)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

	// Checking PHP session
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
	
// Variables
$teamname = $_POST['teamName'];
$discipline = $_POST['discipline'];

// Inserting data to table
$sql = "INSERT INTO teams (name, discipline)
VALUES ('$teamname', '$discipline');";

// Checking data insert
if($result = mysqli_query($connect,$sql)) {
    echo 'Team added!';
} else {
    echo 'Team not added!';
};
?>