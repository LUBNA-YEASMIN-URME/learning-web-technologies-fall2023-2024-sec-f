<?php
    session_start();
    if (!isset($_SESSION['logged_in'])) header('Location: login.php');
    if (!isset($_GET['id'])) header('Location: login.php');
    $id = $_GET['id'];

    $con = mysqli_connect('localhost', 'root', '', 'mid');

    $sql = "SELECT * FROM users where id='$id';";
    $res = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <fieldset>
        <table>
            <tr>
                <td>
                    <fieldset>
                        <table>
                            <?php
                                if ($user['type'] == 'Admin') {
                                    header('Location: admin_home.php');
                                } else if ($user['type'] == 'User') {
                                    header('Location: user_home.php');
                                }
                            ?>
                        </table>
                    </fieldset>
                </td>

                <td width="20"></td>
            </tr>
        </table>
    </fieldset>

    <a href="logout.php">Logout</a>
</body>
</html>
