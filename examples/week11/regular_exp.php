<?php
  if (isset($_POST['act'])) {
    $pattern = $_POST['pattern'];
    $subject = $_POST['subject'];
    $matches = [];
    if (preg_match($pattern, $subject, $matches)) {
      echo '<h2>There is a match</h2>';
      echo '<pre>';
      print_r($matches);
      echo '</pre>';
    } else {
      echo '<h2>No match</h2>';
    }
  }
?>
<form method="post" action="regular_exp.php">
  <div>
    Pattern<br>
    <input type="text" name="pattern" size="100"
      value= "<?= (isset($_POST['pattern']) ? $_POST['pattern'] : '') ?>" >
  </div>
  <div>
    Subject<br>
    <input type="text" name="subject" size="100"
      value= "<?= (isset($_POST['subject']) ? $_POST['subject'] : '') ?>" >
  </div>
  <div>
    <input type="submit" name="act" value="Check">
  </div>
</form>
