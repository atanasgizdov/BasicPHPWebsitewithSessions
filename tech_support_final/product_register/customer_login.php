<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- display a search form -->
    <form action="." method="post">
        <input type="hidden" name="action" value="get_customer">
        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <label>Password:</label>
        <input type="text" name="password">
        <input type="submit" value="Login">
    </form>

</main>
<?php include '../view/footer.php'; ?>
