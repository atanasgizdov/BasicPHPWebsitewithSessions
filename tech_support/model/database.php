<?php
    $dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'ts_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
	
$localhost = "127.0.0.1";
$username = 'ts_user';
$password = 'pa55word';
$dbname = "tech_support";

$connection = mysqli_connect($localhost,$username,$password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
	
?>