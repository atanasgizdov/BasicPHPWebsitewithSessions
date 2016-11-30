<!DOCTYPE html>
<html>
<?php require ('../tech_support/model/logout.php');
?>
<!-- the head section -->
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css"
          href="/tech_support/main.css">
</head>

<!-- the body section -->
<body>
<header>
    <h1>SportsPro Technical Support</h1>
    <p>Sports management software for the sports enthusiast</p>
    <nav>
        <ul>
            <li><a href="/tech_support/index.php">Home</a></li>
            <li><button type="button" onclick=logout();>Log Out</button></li>
        </ul>
    </nav>
</header>
