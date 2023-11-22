<?php
require '../models/userModel.php';


$jobId = (isset($_GET['job_id'])) ? $_GET['job_id'] : $_POST['id'];

$job = getJobById($jobId); 

<center>
    <h1>Update Job</h1>
    <div>
        <form action="../controllers/update_job_controller.php" method="post" novalidate>
            <!-- Hidden field to pass the job ID -->
            <input type="hidden" name="id" value="<?php echo $job['Id']; ?>">
            
            <!-- Populate form fields with job details -->
            <br><label for="name">Company Name*</label><br>
            <input type="text" name="cmpname"  value="<?php echo $job['CompanyName']; ?>"><br>

            <br><label for="email">Title*</label><br>
            <input type="text" name="title"  value="<?php echo $job['Title']; ?>"><br>

            <br><label for="contact">Location*</label><br>
            <input type="text" name="location"  value="<?php echo $job['Location']; ?>"><br>

            <br><label for="contact">Salary*</label><br>
            <input type="text" name="salary" value="<?php echo $job['Salary']; ?>"><br>

            <br><input type="submit" name="submit" value="Update Job"><br>
        </form>
    </div>
</center>
