<head>
  <title>Read CSV files</title>
  <style>
    table, td {
      border-width: 1px;
      border-style: solid;
      padding: 5px;
    }
  </style>
</head>
<body>
<?php
  $fp = fopen('categories.csv', 'r');
  echo "<table>";
  while ($row = fgetcsv($fp)) {
    echo '<tr>';
    foreach ($row as $cell) {
      echo "<td>$cell</td>";
    }
    echo '</tr>';
  }
  echo "</table>";
?>
</body>