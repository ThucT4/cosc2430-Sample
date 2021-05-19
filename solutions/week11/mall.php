<?php
session_start();
require 'product_functions.php';

$products = read_all_products();

$count = 0;

echo '<ul>';
foreach ($products as $p) {
  $id = $p['id'];
  $name = $p['name'];
  echo "<li><a href=\"product.php?id=$id\">$name</a></li>";
  $count++;
  if ($count == 20) {
    break;
  }
}
echo '</ul>';

if (isset($_SESSION['visited_products']) && is_array($_SESSION['visited_products'])) {
  echo 'Visited products';
  echo '<ul>';
  foreach ($_SESSION['visited_products'] as $id) {
    echo "<li>$id</li>";
  }
  echo '</ul>';
}