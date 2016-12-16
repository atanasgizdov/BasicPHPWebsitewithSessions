<?php include 'database.php';>
// this should ensure the DB can be connected to

<?php

// create variables
$first_name	= $_POST['firstname'];
$last_name	= $_POST['lastname'];
$address	= $_POST['address'];
$city 		= $_POST['city'];
$state 		= $_POST['state'];
$postal 	= $_POST['postal'];
$phone 		= $_POST['phone'];
$email		= $_POST['email'];
$password 	= $_POST['password'];

//Execute the query

mysqli_query($connect "INSERT INTO customers(firstname, lastname, address, city, state, postal, phone, email, password)
				VALUES('$first_name', '$last_name', '$address', '$city', $state, $postal, $phone, $email, $password)");