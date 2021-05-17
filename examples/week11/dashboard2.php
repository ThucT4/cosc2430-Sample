<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    // check cookie
    if (isset($_COOKIE['loggedin_name'])) {
      $_SESSION['username'] = $_COOKIE['loggedin_name'];
    } else {
      header('location: login2.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard for admin</title>
</head>
<body>
  <h1>Welcome to the Dashboard <?= $_SESSION['username'] ?></h1>
</body>
</html>