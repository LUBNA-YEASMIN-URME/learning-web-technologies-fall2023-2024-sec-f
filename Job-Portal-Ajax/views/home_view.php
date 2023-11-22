<?php

require '../models/userModel.php';
$jobs = getAllJobs();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>

<body class="backGround center">
    <br><br><br><br>
    
  

<div id="searchResults"></div>
    <center>
    <h1>Add New Job</h1>
        <div>
            <form action="../controllers/add_new_job_controller.php" method="post" novalidate>
                
                <br><label for="name">Compnay Name*</label><br>
                <input type="text" name="cmpname" id="name"><br>

                
                <br><label for="email">Title*</label><br>
                <input type="email" name="title" id="email"><br>

                
                <br><label for="contact">Location*</label><br>
                <input type="text" name="location" id="contact"><br>

               
                <br><label for="contact">Salary*</label><br>
                <input type="text" name="salary" id="contact"><br>

                <br><input type="submit" value="Add New Job"><br>

                
            </form>
        </div>
    </center>

<br></br>

<center>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr><td colspan="5" align="CENTER">Jobs</td></tr>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Location</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>

        <?php foreach ($jobs as $job) : ?>
            <tr>
                <td><?php echo $job['Id']; ?></td>
                <td><?php echo $job['Title']; ?></td>
                <td><?php echo $job['Location']; ?></td>
                <td><?php echo $job['Salary']; ?></td>
                <td><a href="../controllers/delete_job_controller.php?job_id=<?php echo $job['Id']; ?>">Delete</a></td>
                <td><a href="../views/update_job_view.php?job_id=<?php echo $job['Id']; ?>">Update</a></td>

            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">
                <a href="../controllers/logout.php">Logout</a>
            </td>
        </tr>
    </table>
</center>

</body>

</html>
