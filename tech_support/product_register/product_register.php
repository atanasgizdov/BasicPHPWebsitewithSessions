<?php include '../view/header.php'; 
    include '../model/database.php';
    include '../model/product_db.php';
    $result=get_products();?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else: ?>
        <form action="product_register_execute.php" method="post" id="aligned">
            <input type="hidden" name="action" 
                   value="register_product">
            <input type="hidden" name="customer_id" 
                   value="<?php echo htmlspecialchars($customer['customerID']); ?>">

            <label>Customer:</label>
            <label><?php echo htmlspecialchars($customer['firstName'] . ' ' . 
                                              $customer['lastName']) ?></label>
            <br>

            <label>Product:</label>
            <select name="product_code">
            <?php foreach ($result as $product) : ?>
                <option value="<?php echo htmlspecialchars($product['productCode']); ?>">
                    <?php echo htmlspecialchars($product['name']); ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Register Product" />
        </form>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>
