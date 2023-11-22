<?php

    require_once('db.php');

    function login($Username, $Password){
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
    

    function Adminlogin($username, $password){
        $con = getConnection();
        $sql = "select * from admin where Username='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            return true;
        } else {
            return false;
        }
    }

function addnewemp($name, $cmpname, $contact,$username,$password)
{
    $con = getConnection();
    $name = mysqli_real_escape_string($con, $name);
    $cmpname = mysqli_real_escape_string($con, $cmpname);
    $contact = mysqli_real_escape_string($con, $contact);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $status = "1";

    $sql = "INSERT INTO employee (EmployeeName, CompanyName , ContactNo, Username, Password, Status) VALUES ('{$name}', '{$cmpname}', '{$contact}', '{$username}', '{$password}','{$status}')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function addnewjob($cmpname, $title, $location,$salary)
{
    $con = getConnection();
    $cmpname = mysqli_real_escape_string($con, $cmpname);
    $title = mysqli_real_escape_string($con, $title);
    $location = mysqli_real_escape_string($con, $location);
    $salary = mysqli_real_escape_string($con, $salary);

    $sql = "INSERT INTO jobs (CompanyName , Title, Location, Salary) VALUES ('{$cmpname}', '{$title}', '{$location}', '{$salary}')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function searchEmployees($query) {
    $con = getConnection();
    $query = mysqli_real_escape_string($con, $query);

    $sql = "SELECT * FROM employee WHERE EmployeeName LIKE '%{$query}%' OR CompanyName LIKE '%{$query}%'";
    $result = mysqli_query($con, $sql);

    $employees = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }
    return $employees;
}


function deleteJobById($jobId) {
    $con = getConnection();
    $jobId = mysqli_real_escape_string($con, $jobId);
    
    $sql = "DELETE FROM jobs WHERE Id = '{$jobId}'";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function updateJobById($jobId, $newTitle, $newLocation, $newSalary) {
    $con = getConnection();
    $jobId = mysqli_real_escape_string($con, $jobId);
    $newTitle = mysqli_real_escape_string($con, $newTitle);
    $newLocation = mysqli_real_escape_string($con, $newLocation);
    $newSalary = mysqli_real_escape_string($con, $newSalary);
    
    $sql = "UPDATE jobs SET Title = '{$newTitle}', Location = '{$newLocation}', Salary = '{$newSalary}' WHERE Id = '{$jobId}'";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        return true; // Update successful
    } else {
        return false; // Update failed
    }
}



    
    function getAllJobs() {
        $con = getConnection();
    
        $sql = "SELECT * FROM jobs";
        $result = mysqli_query($con, $sql);
    
        $jobs = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $jobs[] = $row;
            }
        }
    
        return $jobs;
    }

    function getJobById($jobId) {
        $con = getConnection();
        $jobId = mysqli_real_escape_string($con, $jobId);
    
        $sql = "SELECT * FROM jobs WHERE Id = '{$jobId}'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result); 
        } else {
            return null; 
        }
    }
    




    function updateUser(){
        $con = getConnection();
        $id = mysqli_real_escape_string($con, $id);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);
        $email = mysqli_real_escape_string($con, $email);
    
        $sql = "UPDATE users SET username='{$username}', password='{$password}', email='{$email}' WHERE id={$id}";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }



?>