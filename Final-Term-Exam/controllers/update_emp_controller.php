<?php
require_once('../models/UserModel.php');

session_start();

if (isset($_POST['submit'])) {
    $employeeId = $_POST['id'];
    $newEmployeeName = $_POST['name'];
    $newContact = $_POST['contact'];
    $newUsername = $_POST['username'];

    $status = updateEmpById($employeeId, $newEmployeeName, $newContact, $newUsername);

    if ($status) {
        echo "Employee updated successfully.";
        header('location: ../views/home_view.php');
        exit();
    } else {
        echo "Failed to update employee. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
