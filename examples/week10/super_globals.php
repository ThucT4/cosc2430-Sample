<?php
  session_start();

  if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
  } else {
    $_SESSION['counter'] = 1;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    form div {
      margin: 20px 50px;
    }
  </style>
</head>
<body>
<?php
  if (isset($_POST['act'])) {
    echo '<h2>$_GET values</h2>';
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    echo '<hr>';

    echo '<h2>$_POST values</h2>';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo '<hr>';

    echo '<h2>$_FILES values</h2>';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    echo '<hr>';

    echo '<h2>$_COOKIE values</h2>';
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
    echo '<hr>';

    echo '<h2>$_SESSION values</h2>';
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo '<hr>';
  }
?>
  <form enctype="multipart/form-data" method="post" action="super_globals.php?get_field1=123&get_field2=456">
    <div>
      A text field<br>
      <input type="text" name="text_element">
    </div>
    <div>
      Some radios<br>
      <input type="radio" name="radio_element" value="1"> Option 1 |
      <input type="radio" name="radio_element" value="2"> Option 2 |
      <input type="radio" name="radio_element" value="3"> Option 3
    </div>
    <div>
      Some checkboxes<br>
      <input type="checkbox" name="checkbox_element[]" value="A"> Option A |
      <input type="checkbox" name="checkbox_element[]" value="B"> Option B |
      <input type="checkbox" name="checkbox_element[]" value="C"> Option C
    </div>
    <div>
      A drop-down select<br>
      <select name="select_element">
        <option value="1">Select 1</option>
        <option value="2">Select 2</option>
        <option value="3">Select 3</option>
        <option value="4">Select 4</option>
      </select>
    </div>
    <div>
      An upload file field<br>
      <input type="file" name="file_element">
    </div>
    <div>
      <input type="submit" name="act" value="Submit">
    </div>
  </form>
</body>
</html>