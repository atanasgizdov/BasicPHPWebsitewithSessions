<?php 
    require '../model/database.php';
    include '../model/customer_db.php';
    $sql="Select * from customers";
    $result=$connection->query($sql);

    $email=trim($_POST['email']);

    foreach ($result as $customer){
       if( $customer['email']==$email){
           include 'product_register.php';
           break;
       }
       else {include 'customer_login.php';
       break;}
    }
?>