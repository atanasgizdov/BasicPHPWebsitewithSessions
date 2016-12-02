<!DOCTYPE html>
<html>
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
            <?php 
            // if logged in as admin - go to admin menu
           	// TO DO
            if (isset($_SESSION['login_user'])) {
				
			echo "<form action=../model/logout.php method=\"post\">";
			echo "<input name=\"submit\" type=\"submit\" id = \"aligned\" value =\"Log Out\">";
			echo "</form>";
			//echo "<li><button type=button>Log Out</button></li>";
			} ?>
        </ul>
    </nav>
</header>
