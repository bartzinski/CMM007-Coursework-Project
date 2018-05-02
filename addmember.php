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
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
$course = $_POST['course'];
$team = $_POST['team'];

// Inserting data to table
$sql = "INSERT INTO members (login, pass, course, type, team)
VALUES ('$username', '$password', '$course', '$type', '$team');";

// Checking data insert
if($result = mysqli_query($connect,$sql)) {
    echo 'Member added!';
} else {
    echo 'Member not added!';
};
?>