<?php
  require('functions.php');

  echo 'routes.phpを通りました。';

  $params = explode('/', $_GET['url']);

  $resource = $params[0];
  $action = $params[1];

  include('./views/' . $resource . '/' . $action . '.php');
?>
