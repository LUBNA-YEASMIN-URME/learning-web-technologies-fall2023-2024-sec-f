<?php
session_start();

if (isset($_POST['change_password'])) {
    
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['id']; 
    
    $con = mysqli_connect('localhost', 'root', '', 'mid');
   
    $query = "SELECT password FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);
}
?>
