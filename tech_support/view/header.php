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
            
            // if session is set and active, show log out button
            if (isset($_SESSION['login_user'])) {
				
			echo "<form action=../model/logout.php method=\"post\">";
			echo "<input name=\"submit\" type=\"submit\" id = \"aligned\" value =\"Log Out\">";
			echo "</form>";
			
			//if not admin user, disallow home button
			
			} ?>
        </ul>
    </nav>
</header>
