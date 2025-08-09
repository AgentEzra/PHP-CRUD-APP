<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./styleFront.css">
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
        <a href="./forgotpassword.php">Forgot Password?</a>
      </div>

      <button type="submit" class="login-button">LOGIN</button>

      <div class="donthave">
        <p>Don't Have An Account?
        <a href="./registeraccount.php">Register</a></p>
      </div>
    </form>
  </div>

  <!-- <script src="script.js"></script> -->
</body>
</html>