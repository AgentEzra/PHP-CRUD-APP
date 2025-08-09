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

    if (!empty($username) && !empty($email) &&!empty($password) && !empty($location)){
      try {
        $query = "INSERT INTO user (username, email, password, created_at, location) 
               VALUES ('$username', '$email', '$password', '$created_at', '$location')";
        $result = mysqli_query($connect, $query);

        $success = 'User Created succesfully';
        // header('location: index.php');
        // exit();

      }
      catch (mysqli_sql_exception $e){
        if (str_contains($e->getMessage(), 'Duplicate entry')) {
                $error = 'Username atau Email sudah digunakan.';
            } else {
                $error = 'Error: ' . $e->getMessage();
            }
      }
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
    <div class="wrapper">
    <form method="post">
      <h1>Register</h1>

      <?php if (!empty($success)): ?>
        <div class="success"><?= $success ?></div>
      <?php elseif (!empty($error)): ?>
        <div class="error"><?= $error ?></div>
      <?php endif; ?>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
    
      <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
      </div>
        
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <div class="input-box">
        <input type="text" name="location" placeholder="Location" required>
      </div>

      <button type="submit" class="login-button">Create</button>

      <div class="already">
        <p>Go Back 
        <a href="table.php">to index?</a></p>
      </div>
    </form>
  </div>
</body>
</html>