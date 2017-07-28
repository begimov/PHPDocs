<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="signin.php" method="post">
      <input type="text" name="name">
      <button type="submit" name="button">Send</button>
    </form>
  </body>
</html>

<?php

require 'GET_superglobal.php';
require 'datetime.php';
require 'func_get_args.php';
