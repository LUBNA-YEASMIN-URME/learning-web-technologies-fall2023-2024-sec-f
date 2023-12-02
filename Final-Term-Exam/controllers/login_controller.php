<?php
    require_once('../models/userModel.php');

    session_start();
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    
    if ($Username == "" || $Password == "") {
        echo "Please enter a username or password!";
    } else {
        $emp = login($Username,$Password);
             
        if ($emp) {
                $_SESSION['Username'] = $Username;
                $_SESSION['isEmp'] = true;
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