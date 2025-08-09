<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Change</title>
  <link rel="stylesheet" href="./styleFront.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <form  method="post" onsubmit="showAlert(event)">

      <h2>Forgot Password?</h2>
      <p>You Can Reset Your Password Here</p>

      <div class="input-box">
        <input type="email" id="email" placeholder="Email" required>
      </div>
      
      <button type="submit" class="login-button">Send My Password</button>

      <div class="already">
        <p>Already Have An Account? <a href="../index.php">Login</a></p>
      </div>
      
      <div class="donthave">
        <p>Don't Have An Account? <a href="./registeraccount.php">Register</a></p>
      </div>
    </form>
  </div>

  <script>
    function showAlert(event) {
      event.preventDefault();  // Prevent form submission for now
      const email = document.getElementById("email").value;

      if (email) {
        // Display the alert to the user
        alert("If this email is associated with an account, you will receive a password reset link shortly.");

        // Optionally, submit the form after showing the alert
        // event.target.submit();  // Uncomment this to allow form submission after alert
      } else {
        alert("Please enter a valid email address.");
      }
    }
  </script>

</body>
</html>