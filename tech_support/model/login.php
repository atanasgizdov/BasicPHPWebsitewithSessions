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
		
		// check which type of user is trying to access and user appropriate check
		if (isset($_SESSION['userTypeOnEntry']) && $_SESSION['userTypeOnEntry'] == 'admin') {
		check_admin_user($connection, $username, $password);	
		}
		else if (isset($_SESSION['userTypeOnEntry']) && $_SESSION['userTypeOnEntry'] == 'tech') {
		check_tech_user($connection, $username, $password);
		}
		else if (isset($_SESSION['userTypeOnEntry']) && $_SESSION['userTypeOnEntry'] == 'customer') {
		check_customer_user($connection, $username, $password);
		}

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

function check_tech_user($connection, $username, $password) {
   	$sql = "select * from technicians where email = '$username' and password = '$password'";
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['loggedin'] = true;	
		$_SESSION['login_user']=$username;
		$_SESSION['usertype']='tech';
		header("location: ../technician_manager");
	}
	else {
		echo "<h3 align = center>Sorry your Username/Password is incorrect - please try again</h3>";
	}
}

function check_customer_user($connection, $username, $password) {
   	$sql = "select * from customers where email = '$username' and password = '$password'";
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['loggedin'] = true;	
		$_SESSION['login_user']=$username;
		$_SESSION['usertype']='customer';
		header("location: ../customer_manager");
	}
	else {
		echo "<h3 align = center>Sorry your Username/Password is incorrect - please try again</h3>";
	}
}
?>