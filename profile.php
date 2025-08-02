<?php
include "connect.php";

$sql = "SELECT * FROM user WHERE 1";
$result = $connect->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()){
            echo "<tr>
            <td>$row[id]</td>
            <td>$row[username]</td>
            <td>$row[email]</td>
            <td>$row[password]</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>