<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    // check cookie
    if (isset($_COOKIE['loggedin_name'])) {
      $name = $_COOKIE['loggedin_name'];
      // check if the cookie is valid one
      if (file_exists("../$name")) {
        $val = file_get_contents("../$name");
        if ($_COOKIE['uniqid'] == $val) {
          $_SESSION['username'] = $_COOKIE['loggedin_name'];
        }
      }
    }
  }

  if (!isset($_SESSION['username'])) {
    header('location: login3.php');
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