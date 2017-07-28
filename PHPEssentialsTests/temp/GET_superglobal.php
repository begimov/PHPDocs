<?php

// echo $_GET['name'], '<br><br>';
echo 'GET:', '<pre>', var_dump($_GET), '</pre>';

if (isset($_GET['s'], $_GET['p'])) {
  $page = $_GET['p'];
  $searchItem = $_GET['s'];
  $pages = 10;
  echo "Search for: {$searchItem}", '<br>';
  echo "Page: {$page}", '<br>';
  for ($i = 1; $i <= $pages ; $i++) {
      echo "<a href='?s={$searchItem}&p={$i}'>" . $i . '</a> ';
  }
}
