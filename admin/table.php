<?php
include "connect.php";

$result = mysqli_query($connect, "SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="index">
        <div class="texts">
            <h1>Administrator</h1>
            <div class="already">
            <p>Want to add more users?
            <a href="create.php">Create user</a>
            </p>
        </div>
    </div>
    <div class="tables">
        <table border="1", cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created At</th>
            <th>Location</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        <?php
            $no = 0;
            while ($row = mysqli_fetch_assoc($result)){
                $no++;
            ?>
        <tr>
            <td><?php echo $no;?></td>
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
    </div>
  </div>

</body>
</html>