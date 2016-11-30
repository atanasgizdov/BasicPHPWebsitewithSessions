<?php
require ('/database.php');

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

check_admin_user($connection, $username, $password);
	}
}

//access functions for users
function check_admin_user($connection, $username, $password) {
   	$sql = "select * from administrators where username = '$username' and password = '$password'";
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['login_user']=$username;
		header("location: /index.php");
	}
	else {
		echo "it entered the loop and found no records";
	}
}
?>