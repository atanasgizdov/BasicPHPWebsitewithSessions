
<footer>
	<?php
	if (isset($_SESSION['login_user'])) {
		echo "   You are logged in as ". $_SESSION['login_user'];
	}
	?>
    <p class="copyright">
        &copy; <?php echo date("Y"); ?> SportsPro, Inc.
    </p>
</footer>
</body>
</html>