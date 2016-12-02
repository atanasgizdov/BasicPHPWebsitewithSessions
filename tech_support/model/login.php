<?php
require ('/database.php');

session_start();


if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
	echo "<h3 align = center>Please enter Username/Password</h3>";
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

//access functions for admin users
function check_admin_user($connection, $username, $password) {
   	$sql = "select * from administrators where username = '$username' and password = '$password'";
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['loggedin'] = true;	
		$_SESSION['login_user']=$username;
		$_SESSION['usertype']='admin';
		header("location: ../index_admin.php");
	}
	else {
		echo "<h3 align = center>Sorry your Username/Password is incorrect - please try again</h3>";
	}
}
?>