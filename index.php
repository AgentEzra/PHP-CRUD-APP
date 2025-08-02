<?php
include "connect.php";

$result = mysqli_query($connect, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1", cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Dibuat pada</th>
            <th>Lokasi</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)){
            ?>
        <tr>
            

            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['created_at'];?></td>
            <td><?php echo $row['location'];?></td>

            <td><a href=" delete.php?id=<?= $row['id']; ?>">Delete</a></td>
            <td><a href=" edit.php?id=<?= $row['id']; ?>">Edit</a></td>
        </tr>

        <?php
            }
            ?>
    </table>

    <a href="create.php">Create user</a>
</body>
</html>