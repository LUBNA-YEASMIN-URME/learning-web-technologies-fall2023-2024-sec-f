<?php

$con = mysqli_connect('localhost', 'root', '', 'mid');
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);  
?>

<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><td colspan="4" align="CENTER">Users</td></tr>
        <tr>
            <td>ID</td>
			<td>NAME</td>
			<td>USER TYPE</td>
        </tr>

        <?php
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td colspan="3" align="right">
                <a href="home.html">Go Home</a>
            </td>
        </tr>
    </table>
</center>