<?php

// error_reporting(E_ALL);

// error_reporting(E_NOTICE);

// error_reporting(E_WARNING);

// error_reporting(E_ALL & ~E_NOTICE);

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$result = $n1 / $n2;

echo "<h1>The result of $n1 / $n2 is $result</h1>";