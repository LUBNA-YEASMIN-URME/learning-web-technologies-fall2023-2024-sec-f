
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="../js/script.js"></script>
</head>

<body class="backGround center">
    <br><br><br><br>
    <center>
    <h1>Login</h1>
        <div>
            <form action="../controllers/login_controller.php" method="post" onsubmit="validateLogin()" novalidate>
                <br><label for="email">Username</label><br>
                <input type="username" name="Username" id="username"><br>
                <br><label for="password">Password*</label><br>
                <input type="password" name="Password" id="password"><br>
                <br><input type="submit" value="Login"><br>
            </form>
            
        </div>
    </center>
</body>

</html>
