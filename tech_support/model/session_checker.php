<?php
if (!isset($_SESSION['login_user'])) {
	header("location: /tech_support/view/login.php");
}
?>