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
    

    <center>
    <h1>Sign Up</h1>
        <div>
            <form action="../controllers/signup_controller.php" method="post" onsubmit="validateRegister()" novalidate>
                
                <br><label for="name">Employee Name*</label><br>
                <input type="text" name="name" id="name"><br>
                <br><label for="contact">Contact*</label><br>
                <input type="text" name="contact" id="contact"><br>
                <br><label for="contact">Username*</label><br>
                <input type="text" name="username" id="contact"><br>
                <br><label for="password">Password*</label><br>
                <input type="password" name="password" id="password"><br>
                <br><label for="cpassword">Confirm Password*</label><br>
                <input type="password" name="cpassword" id="cpassword"><br>
                <br><input type="submit" value="Sign Up"><br>
                <p class="a">
                    <a href="../views/login_view.php">Login</a><br>
                   
                </p>
            </form>
        </div>
    </center>
</body>

</html>
