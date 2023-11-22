<?php
    require_once('../models/userModel.php');

    session_start();
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    
    if ($Username == "" || $Password == "") {
        echo "Please enter a username or password!";
    } else {
        $user = login($Username,$Password);
        $admin = Adminlogin($Username,$Password);        
        if ($admin) {
                // If User is an admin
                $_SESSION['isAdmin'] = true;
                $_SESSION['flag'] = 'true';
                setcookie('flag', 'true', time()+3600, '/');
                header('location: ../views/admin_view.php');
            } 
            else if($user) {
                // If User is not an admin
                $_SESSION['isAdmin'] = false;
                $_SESSION['flag'] = 'true';
                setcookie('flag', 'true', time()+3600, '/');
                header('location: ../views/home_view.php');
            }
            
         else {
            echo "Invalid user!";
            header('location: ../views/login_view.php');
        }
    }
    
    
    
?>