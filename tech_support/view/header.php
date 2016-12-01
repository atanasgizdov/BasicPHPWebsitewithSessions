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
            <?php if (isset($_SESSION['login_user'])) {
			echo "<li><button type=button>Log Out</button></li>";
			} ?>
        </ul>
    </nav>
</header>
