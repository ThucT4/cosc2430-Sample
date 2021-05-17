<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
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