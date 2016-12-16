<?php

    $dsn = 'mysql:host=64.119.131.183;dbname=f16team2';
    $username = 'F16Team2';
    $password = 'F16Team2';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }

$localhost = "64.119.131.183";
$username = 'F16Team2';
$password = 'F16Team2';
$dbname = "f16team2";

$connection = mysqli_connect($localhost,$username,$password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>