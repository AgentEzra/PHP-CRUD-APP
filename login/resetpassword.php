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
    <h2>Password Reset</h2>

    <!-- Notification message div -->
    <!-- <div id="message" class="msg" style="color: red; margin-bottom: 10px;"></div> -->

    <formaction="../backend/resetpassword.php" method="post">
      <div class="password">
        <input type="password" id="newPassword" placeholder="New Password">
      </div>
      <div class="password">
        <input type="password" id="confirmPassword" placeholder="Confirm Password">
      </div>
      <button onclick="lolipw()" type="submit" class="login-button" id="notif">Reset My Password</button>
    </form>
  </div>

  <!-- <script>
    document.getElementById("notif").addEventListener("click", function(event) {
      event.preventDefault(); // Prevents the form from submitting

      // Get the message div to display notifications
      const messageDiv = document.getElementById("message");

      // Get the values of both password fields
      const newPassword = document.getElementById("newPassword").value;
      const confirmPassword = document.getElementById("confirmPassword").value;

      // Clear any previous messages
      messageDiv.textContent = "";

      // Check if any of the fields is empty
      if (!newPassword || !confirmPassword) {
        messageDiv.textContent = "Please fill in both fields.";
        return;
      }

      // Check if passwords match
      if (newPassword !== confirmPassword) {
        messageDiv.textContent = "Passwords do not match. Please try again.";
        return;
      }

      // Show success message if passwords match and fields are filled
      messageDiv.style.color = "green";
      messageDiv.textContent = "Your Password Has Been Changed Successfully";
    });
  </script> -->
  <script>
    function lolipw(){
      const pw = document.getElementById("newPassword")
      const cpw = document.getElementById("confirmPassword")
      if (pw == cpw){
        alert("Password Has Been Changed")
      } else {
        alert("Password Must Match")
      }
    }
  </script>

</body>
</html>
