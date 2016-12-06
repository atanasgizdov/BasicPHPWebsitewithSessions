<?php include 'view/header.php';
//include 'model/session_checker_index_level.php';
?>

<main>
    <nav>    
    <h2>Main Menu</h2>
    <ul>
        <li><a href="index_admin.php?userTypeOnEntry=admin">Admin Login</a></li>
        <li><a href="technician_manager?userTypeOnEntry=tech">Manage Technicians</a></li>
        <li><a href="customer_manager?userTypeOnEntry=customer">Manage Customers</a></li>
    </ul>
    </nav>
</main>
<?php include 'view/footer.php'; ?>