<?php
require_once('../models/userModel.php');

session_start();
$name = $_POST["name"];
$cmpname = $_POST["cmpname"];
$contact = $_POST["contact"];
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if (empty($name) || empty($cmpname) || empty($contact) || empty($username) || empty($password) || empty($cpassword)) {
    echo "Please fill in all the fields.";
} elseif ($password !== $cpassword) {
    echo "Passwords do not match.";
} else {
    $status = addnewemp($name, $cmpname, $contact,$username,$password);
    
    if ($status) {
        echo "New Employee Added.";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
