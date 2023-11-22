<?php
require_once('../models/userModel.php');

session_start();
$cmpname = $_POST["cmpname"];
$title = $_POST["title"];
$location = $_POST["location"];
$salary = $_POST["salary"];


if (empty($cmpname) || empty($title) || empty($location) || empty($salary)) {
    echo "Please fill in all the fields.";
} 
else {
    $status = addnewjob($cmpname, $title, $location,$salary);
    
    if ($status) {
        echo "New job Added.";
    } else {
        echo "failed. Please try again.";
    }
}
?>
