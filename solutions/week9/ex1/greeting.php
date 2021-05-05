<?php
  include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Server Date</title>
  </head>
  <body>
    <?php
      $t_format = get_current_time();
      $t_12_format = get_current_time(true);
    ?>
    <h1>
      The current time in 24 hours is <?= $t_format ?>
       and 12 hours is <?= $t_12_format ?>
    </h1>
  </body>
</html>
