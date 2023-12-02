<?php

require_once('db.php');

function login($Username, $Password)
{
        $con = getConnection();
        $sql = "SELECT * FROM employee WHERE Username='{$Username}' AND Password='{$Password}'";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            return true;
        } else {
            return false;
        }
}

function addnewemp($name, $contact,$username,$password)
{
    $con = getConnection();
    $name = mysqli_real_escape_string($con, $name);
    $contact = mysqli_real_escape_string($con, $contact);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "INSERT INTO employee (EmployeeName,ContactNo, Username, Password) VALUES ('{$name}', '{$contact}', '{$username}', '{$password}')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}


function searchEmployees($query) 
{
    $con = getConnection();
    $query = mysqli_real_escape_string($con, $query);

    $sql = "SELECT * FROM employee WHERE EmployeeName LIKE '%{$query}%'";
    $result = mysqli_query($con, $sql);

    $employees = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }
    return $employees;
}


function deleteEmpById($Id) {
    $con = getConnection();
    $Id = mysqli_real_escape_string($con, $Id);
    
    $sql = "DELETE FROM employee WHERE Id = '{$Id}'";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getAllEmp() 
{
    $con = getConnection();
    
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);
    
    $emp = array();
    if ($result && mysqli_num_rows($result) > 0) 
    {
            while ($row = mysqli_fetch_assoc($result)) {
                $emp[] = $row;
            }
    }
    
    return $emp;
}

function getEmpById($Id) 
{
        $con = getConnection();
        $Id = mysqli_real_escape_string($con, $Id);
    
        $sql = "SELECT * FROM employee WHERE Id = '{$Id}'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result); 
        } else {
            return null; 
        }
}
    
    function updateEmpById($employeeId, $newEmployeeName, $newContact, $newUsername) 
    {
        $con = getConnection();
        $employeeId = mysqli_real_escape_string($con, $employeeId);
        $newEmployeeName = mysqli_real_escape_string($con, $newEmployeeName);
        $newContact = mysqli_real_escape_string($con, $newContact);
        $newUsername = mysqli_real_escape_string($con, $newUsername);
    
        $sql = "UPDATE employee SET EmployeeName='{$newEmployeeName}', ContactNo='{$newContact}', Username='{$newUsername}' WHERE EmployeeId='{$employeeId}'";
        $result = mysqli_query($con, $sql);
    
        if ($result) {
            return true; 
        } else {
            return false; 
        }
    }
    



?>