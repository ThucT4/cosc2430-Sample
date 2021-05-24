<?php

// return the content of a file
function read_a_file($file_name) {
  if (file_exists($file_name)) {
    return file_get_contents($file_name);
  }
  throw new Exception("Cannot read the $file_name file");
}

$file_name = $_GET['f'];

// Without exception handling
// $content = read_a_file($file_name);
// echo $content;

// With exception handling
try {
  $content = read_a_file($file_name);
  echo $content;
} catch (Exception $e) {
  echo "<h1>It's not possible to read</h1>";
  echo "Error message: " . $e->getMessage();
}
?>