<?php
  // read all data for a particular contry
  // and store the result in a multi-dimensional array
  function read_my_country($file_name, $country_code) {
    $fp = fopen($file_name, 'r');
    $all = [];
    while ($row = fgetcsv($fp)) {
      // country code is at 2nd column, which has index 1
      if ($row[1] == $country_code) {
        // add the row to collection of row
        $all[] = $row;
      }
    }
    // the reading technique above is not efficient, but it is good enough
    // for this amount of data
    fclose($fp);
    return $all;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
<?php
  $file_name = "who_covid_southeast.csv";
  $country = 'PH';  // my assumed id is s123456 => PH is the country code I should use
  $all = read_my_country($file_name, $country);

  echo '<h1>COVID Report</h1>';
  $table = '<table>';
  $table .= '<tr><th>Reported Date</th><th>Cumulative Cases</th></tr>';
  if ($_GET['duration'] == 'day') {
    // just display 10 first rows
    $count = 0;
    foreach ($all as $row) {
      $table .= '<tr>';
      // reported date is at 1st column (index 0)
      $table .= '<td>' . $row[0] . '</td>';
      // cumulative cases is at 6th column (index 5)
      $table .= '<td>' . $row[5] . '</td>';
      $table .= '</tr>';
      // how many we have displayed so far?
      $count++;
      if ($count == 10) {
        break;
      }
    }
  } elseif ($_GET['duration'] == 'month') {
    // use above technique, but only count when we reach the first day of a month
    $count = 0;
    foreach ($all as $row) {
      // get individual day, month, year values
      // remember, reported date is at 1st column (index 0)
      $date_components = explode('/', $row[0]);
      // the day component is at 2nd position
      // check if it is the first day
      // if not, just skip the remaining code
      if ($date_components[1] != '1') {
        continue;
      }
      // the below code is the same as "latest 10 days" logic above
      // because we have reached the first day of a month now
      $table .= '<tr>';
      // reported date is at 1st column (index 0)
      $table .= '<td>' . $row[0] . '</td>';
      // cumulative cases is at 6th column (index 5)
      $table .= '<td>' . $row[5] . '</td>';
      $table .= '</tr>';
      // how many we have displayed so far?
      $count++;
      if ($count == 10) {
        break;
      }
    }
  }
  $table .= '</table>';
  echo $table;
?>
  </body>
</html>