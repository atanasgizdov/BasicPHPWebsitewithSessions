<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- display a search form -->
    <form action="customer_login_execute.php" method="post">
        <input type="hidden" name="action" value="get_customer">
        <label>Email:</label>
        <input type="email" name="email">
        <input type="submit" value="Login">
    </form>

</main>
<?php include '../view/footer.php'; ?>
