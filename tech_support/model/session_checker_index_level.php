<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
}

else {
	$_SESSION['userTypeOnEntry'] = $_GET['userTypeOnEntry'];
	header("location: view/login.php");
}
?>