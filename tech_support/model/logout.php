<?php
session_start();

function logout() {
	if(!empty($_SESSION) && is_array($_SESSION)) {
     foreach($_SESSION as $sessionKey => $sessionValue)
         session_unset($_SESSION[$sessionKey]);
 }

 session_destroy();
{
header("Location: index.php"); // Redirecting To Home Page
}
}
?>