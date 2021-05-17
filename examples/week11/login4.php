<?php
  session_start();

  if (isset($_POST['act'])) {
    $pass = $_POST['pass'];
    $hash = file_get_contents('../pass.txt');
    if (password_verify($pass, $hash)) {
      // create a name/uniq value pair to prevent modification
      $username = $_POST['username'];
      $uniqid = uniqid();

      // store the pair on the server for later validation
      // note: the location is outside of document root
      file_put_contents("../$username", $uniqid);

      // create a cookie that expires after 7 days
      setcookie('loggedin_name', $username, time() + 60 * 60 * 24 * 7);
      setcookie('uniqid', $uniqid, time() + 60 * 60 * 24 * 7);
      $_SESSION['username'] = $_POST['username'];
      header('location: dashboard3.php');
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
  <form method="post" action="login4.php">
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