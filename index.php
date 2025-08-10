<?php
require './admin/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari POST
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sanitasi input
    $username_or_email = mysqli_real_escape_string($connect, $username);

    // Query cek username/email
    $query_sql = "SELECT * FROM user WHERE (username = ? OR email = ?)";

    if ($stmt = mysqli_prepare($connect, $query_sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $username_or_email, $username_or_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Password plain text (tidak disarankan di production)
            if ($password === $user['password']) {
                header("Location: https://chess.com");
                exit();
            } else {
                echo "<center><h1>Username or Password is incorrect. Please try again.</h1>
                <button><strong><a href='index.php'>Login</a></strong></button></center>";
            }
        } else {
            echo "<center><h1>Username or Email not found. Please try again.</h1>
            <button><strong><a href='index.php'>Login</a></strong></button></center>";
        }

        mysqli_stmt_close($stmt);
    }
    mysqli_close($connect);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./login/styleFront.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <form method="post">
      <h1>Login</h1>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
    
      <div class="input-box">
        <!-- <input type="password" id="password" name="password" placeholder="Password" required>
        <span id="togglePassword" class="eye-icon">&#128065;</span> -->
        <div class="input-box">
          <input type="password" id="password" name="password" placeholder="Password" required>
          
        </div> 
      </div>
    
      <div class="remfor">
        <label><input type="checkbox" name="remember"> Remember Me</label>
        <a href="./login/forgotpassword.php">Forgot Password?</a>
      </div>

      <button type="submit" class="login-button">LOGIN</button>

      <div class="donthave">
        <p>Don't Have An Account?
        <a href="./login/registeraccount.php">Register</a></p>
      </div>
    </form>
  </div>

  <!-- <script src="script.js"></script> -->
</body>
</html>