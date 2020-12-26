<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="../styles/register.css">
</head>

<body style="background-color: #000;">

  <h1 id="topic">Sign Up</h1>
  <form action="../resources/user.php" method="post" id="register_form">
    <label for="username">Enter a Username</label><br>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Enter a Password</label><br>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm_password">Confirm Password</label><br>
    <input type="password" name="confirm_password" id="confirm_password" required>
    <input type="submit" value="Submit">
  </form>

  <div class="container">
    <a href="login.php" id="back_button">Back</a>
  </div>
</body>

</html>