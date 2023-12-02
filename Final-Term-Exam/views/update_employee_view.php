<?php
require '../models/userModel.php';

$Id = (isset($_GET['Id'])) ? $_GET['Id'] : $_POST['Id'];

$employee = getEmpById($Id);
?>
<script src="../js/script.js"></script>
<center>
    <h1>Update Employee</h1>
    <div>
        <form action="../controllers/update_emp_controller.php" method="post" onsubmit="validateUpdate()">
            <input type="hidden" name="id" value="<?php echo $employee['Id']; ?>">
            <br><label for="name">Employee Name*</label><br>
            <input type="text" name="name" value="<?php echo $employee['EmployeeName']; ?>"><br>
            <br><label for="contact">Contact*</label><br>
            <input type="text" name="contact" value="<?php echo $employee['ContactNo']; ?>"><br>

            <br><label for="username">Username*</label><br>
            <input type="text" name="username" value="<?php echo $employee['Username']; ?>"><br>
            <br><input type="submit" name="submit" value="Update Employee"><br>
        </form>
    </div>
</center>
