<?php

$username = $_POST["username"];

$password = $_POST["password"];

 

if (preg_match('/^[a-zA-Z0-9._-]+$/', $username) && strlen($password) >= 8 && preg_match('/[@#$%]/', $username)) {

    echo "Validation successful!";

} else {

    echo "Validation failed!";

}

?>