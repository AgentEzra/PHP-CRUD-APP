<?php
include "connect.php";

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $created_at = date('Y-m-d H:i:s');
    $location = $_POST['location'] ?? '';

    if (!empty($username) || !empty($email) ||!empty($password) || !empty($location)){
        $query = "INSERT INTO user (username, email, password, created_at, location) 
              VALUES ('$username', '$email', '$password', '$created_at', '$location')";
        $result = mysqli_query($connect, $query);

        header("Location: index.php");
        $success = 'Query berhasil dijalankan';
        exit();
    }
    else {
        $error = 'Silahkan isi semua form';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!empty($success)){ 
            echo $success;
        }
        else if (!empty($error)){
            echo $error;
        } 
    ?>

    <form method="post">
        Username :<input type="text" name="username" placeholder="Username" required>
        Email :<input type="email" name="email" placeholder="Email" required>
        Password :<input type="password" name="password" placeholder="Password" required>
        Location :<input type="text" name="location" placeholder="Location" require>
        <button type="submit" name="submit">Create User</button>
    </form>

    <a href="index.php">to index</a>
</body>
</html>