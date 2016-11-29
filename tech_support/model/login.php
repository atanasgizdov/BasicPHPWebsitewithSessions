<?php

session_start();

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {

// TO DO first
// create a method to re-direct to log-in on error
}

else {
	

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
	}
}