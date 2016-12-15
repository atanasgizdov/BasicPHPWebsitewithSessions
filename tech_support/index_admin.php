<?php include 'view/header.php'; 
require 'model/session_checker_index_level.php';	

// disalow entry if not an admin
if (isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true) {

if (isset($_SESSION['usertype']) AND ($_SESSION['usertype'] == "admin")) {
	
}
else {
	header("location: view/invalidpermissions.php?".$_SESSION['usertype']);
	
	}

}

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