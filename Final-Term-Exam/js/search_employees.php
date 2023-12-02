<?php
require('../models/db.php');
require_once('../models/userModel.php');

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    
    $employees = searchEmployees($query);

    if (!empty($employees)) {
        foreach ($employees as $employee) {
            echo '<p>' . $employee['EmployeeName'] .'</p>';
            
        }
    } else {
        echo 'No results found';
    }
} else {
    echo 'Invalid request';
}

?>
