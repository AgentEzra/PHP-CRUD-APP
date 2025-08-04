<?php
include 'connect.php';

$success = '';
$error = '';
try {
    $id = $_GET['id'];

    $query = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $location = $_POST['location'];

        $querys = "UPDATE user SET username = '$username', email = '$email', password = '$password', location = '$location' WHERE id = '$id'";
        $result = mysqli_query($connect, $querys);

        $success = 'User edited succesfully';

    // header ('location: index.php');
    // exit();
    }
}
catch (mysqli_sql_exception $e){
        $error = "Edit unsuccess : " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
    <form method="post">
      <h1>Edit User</h1>

      <?php if (!empty($success)): ?>
        <div class="success"> <?= $success ?> </div>
      <?php elseif (!empty($error)): ?>
        <div class="error"> <?=  $error ?> </div>
      <?php endif; ?>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" value="<?= $data['username'];?>" required>
      </div>
    
      <div class="input-box">
        <input type="text" name="email" placeholder="Email" value="<?= $data['email'];?>" required>
      </div>
        
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" value="<?= $data['password'];?>" required>
      </div>

      <div class="input-box">
        <input type="text" name="location" placeholder="Location" value="<?= $data['location'];?>" required>
      </div>

      <button type="submit" class="login-button">Edit</button>

      <div class="already">
        <p>Go Back 
        <a href="index.php">to index?</a></p>
      </div>
    </form>
  </div>
</body>
</html>