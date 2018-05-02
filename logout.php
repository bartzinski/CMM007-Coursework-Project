<?php
	// Resuming existing session
	session_start();
	// Closing existing session
	session_unset();
	// Redirect to index home page
	header('Location: index.php');

?>