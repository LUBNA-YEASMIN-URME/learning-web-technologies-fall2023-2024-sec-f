<?php
require_once('../models/userModel.php');

session_start();

if (isset($_GET['job_id'])) {
    $jobIdToDelete = $_GET['job_id'];

    
    $status = deleteJobById($jobIdToDelete);

    if ($status) {
        echo "Job deleted successfully.";
        
        exit();
    } else {
        echo "Failed to delete job. Please try again.";
    }
} else {
    echo "Invalid job ID.";
}
?>
