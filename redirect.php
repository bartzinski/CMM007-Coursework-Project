// <?php
	// Resuming existing session
    session_start();
	// Connection with login system
    if($_SESSION['type'] == 'user'){
        header('Location: http://localhost/member.php?/');
    } elseif ($_SESSION['type'] == 'admin'){
        header('Location: http://localhost/admin.php?/');
    } elseif ($_SESSION['type'] == 'manager'){
        header('Location: http://localhost/tmanager.php?/');
    } else {
        header('Location: logout.php');
    }

?>