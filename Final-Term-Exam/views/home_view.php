
<?php

require '../models/userModel.php';
$emps = getAllEmp();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<div id="searchResults"></div>
<body class="backGround center">
    <br><br><br><br>
    <center>
    <h1>Welcome</h1>
        
    </center>

    <center>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr><td colspan="5" align="CENTER">Emp List</td></tr>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Contact</td>
            <td>Username</td>
            <td>Action</td>
        </tr>

        <?php foreach ($emps as $emp) : ?>
            <tr>
                <td><?php echo $emp['Id']; ?></td>
                <td><?php echo $emp['EmployeeName']; ?></td>
                <td><?php echo $emp['ContactNo']; ?></td>
                <td><?php echo $emp['Username']; ?></td>
                <td><a href="../controllers/delete_emp_controller.php?Id=<?php echo $emp['Id']; ?>">Delete</a></td>
                <td><a href="../views/update_employee_view.php?Id=<?php echo $emp['Id']; ?>">Update</a></td>

            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">
                <a href="../controllers/logout.php">Logout</a>
            </td>
        </tr>
    </table>
</center>

<br></br>


</body>

</html>
