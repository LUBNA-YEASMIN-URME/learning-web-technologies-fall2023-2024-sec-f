<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="../js/script.js"></script>
</head>

<body class="backGround center">
    <br><br><br><br>
    <input type="text" id="searchInput" placeholder="Search jobs">
<button onclick="searchEmployees()">Search</button>
<div id="searchResults">
    <!-- Results will be displayed here -->
</div>



    <center>
    <h1>Add New Employee</h1>
        <div>
            <form action="../controllers/signup_controller.php" method="post" novalidate>
                <!-- Name -->
                <br><label for="name">Employee Name*</label><br>
                <input type="text" name="name" id="name"><br>

                <!-- Email -->
                <br><label for="email">Compnay Name*</label><br>
                <input type="email" name="cmpname" id="email"><br>

                <!-- Contact -->
                <br><label for="contact">Contact*</label><br>
                <input type="text" name="contact" id="contact"><br>

                <!-- Username -->
                <br><label for="contact">Username*</label><br>
                <input type="text" name="username" id="contact"><br>

                <!-- Password -->
                <br><label for="password">Password*</label><br>
                <input type="password" name="password" id="password"><br>

                <!-- Confirm Password -->
                <br><label for="cpassword">Confirm Password*</label><br>
                <input type="password" name="cpassword" id="cpassword"><br>

                <br><input type="submit" value="Add Employee"><br>

                <p class="a">
                    <a href="../views/login_view.php">Login</a><br>
                    <a href="../views/forget_password_view.php">Forget Password</a>
                </p>
            </form>
        </div>
    </center>
</body>

</html>
