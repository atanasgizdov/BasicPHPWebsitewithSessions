<?php include 'view/header.php'; 
require 'model/session_checker_index_level.php';	

// disalow entry if not an admin user
/*if (isset($_SESSION['usertype']) && $_SESSION['userype'] == 'admin' ) {
	
}
else {
	header("location: view/invalidpermissions.php");
}
*/
?>

<main>
    <nav>    
    <h2>Administrators</h2>
    <ul>
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="technician_manager">Manage Technicians</a></li>
        <li><a href="customer_manager">Manage Customers</a></li>
    </ul>

   
    </nav>
</main>
<?php include 'view/footer.php'; ?>