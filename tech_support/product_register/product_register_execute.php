<?php 
    include '../view/header.php'; 
    include '../model/database.php';
    include '../model/registration_db.php';

    $customerId=$_POST["customer_id"];
    $productCode=htmlspecialchars($_POST['product_code']);
    $date=date('Y-m-d h:i:s');
   $sql=add_registration($customerId, $productCode);

    echo "Product ".$productCode." registered successfully.";

    ?>
