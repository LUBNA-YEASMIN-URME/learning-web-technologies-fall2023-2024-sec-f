<?php
require_once('../models/UserModel.php');

session_start();

if (isset($_POST['submit'])) {
    $jobId = $_POST['id'];
    $newTitle = $_POST['title'];
    $newLocation = $_POST['location'];
    $newSalary = $_POST['salary'];

    
    $status = updateJobById($jobId, $newTitle, $newLocation, $newSalary);

    if ($status) {
        echo "Job updated successfully.";
        exit();
    } else {
        echo "Failed to update job. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
