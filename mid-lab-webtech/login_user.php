<?php
    session_start();

    if(!isset($_POST['submit'])) {header('location: login.php');}
    $con = mysqli_connect('localhost', 'root', '', 'mid');

    $id = $_POST['id'];
   
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where (id='$id')  && password='$password';";
    
    $res = mysqli_query($con, $sql);
    $users = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);

    if( $users == 1){
        
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $id;
        $_SESSION['type'] = $row['type'];
        header('location: profile.php?id='.$id);
    }
    else header('location: login.php?');

?>