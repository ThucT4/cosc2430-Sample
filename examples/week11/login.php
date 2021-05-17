<?php
  session_start();

  if (isset($_POST['act'])) {
    if (isset($_POST['pass']) && $_POST['pass'] == 'P@ssW0rd') {
      $_SESSION['username'] = $_POST['username'];
      header('location: dashboard.php');
    }
    $status = 'Invalid username/password';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    form div {
      margin: 20px 50px;
    }
    .error {
      background-color: red;
    }
  </style>
</head>
<body>
<?php
  if (isset($status)) {
    echo "<h3 class=\"error\">$status</h3>";
  }
?>
  <h2>Login Form</h2>
  <form method="post" action="login.php">
    <div>
      Username<br>
      <input type="text" name="username">
    </div>
    <div>
      Password<br>
      <input type="password" name="pass">
    </div>
    <div>
      <input type="submit" name="act" value="Login">
    </div>
  </form>
</body>
</html>