<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');
include '../model/session_checker.php';


// disalow entry if not an admin
if (isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true) {

if (isset($_SESSION['usertype']) AND ($_SESSION['usertype'] == "admin")) {
	
}
else {
	header("location: view/invalidpermissions.php?".$_SESSION['usertype']);
	
	}

}

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'login_customer';
    }
}

//instantiate variable(s)
$email = '';

if ($action == 'login_customer') {
    include('customer_login.php');
} else if ($action == 'get_customer') {
    $email = filter_input(INPUT_POST, 'email');
    $customer = get_customer_by_email($email);
    $products = get_products();
    include('product_register.php');
} else if ($action == 'register_product') {
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $product_code = filter_input(INPUT_POST, 'product_code');
    add_registration($customer_id, $product_code);
    $message = "Product ($product_code) was registered successfully.";
    include('product_register.php');
}
?>