<?php
require_once('../models/userModel.php');

session_start();

if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $status = deleteEmpById($Id);

    if ($status) {
        header('location: ../views/home_view.php');
        echo "Emp deleted successfully.";
        
        exit();
    } else {
        echo "Failed to delete Emp. Please try again.";
    }
} else {
    echo "Invalid Emp ID.";
}
?>
