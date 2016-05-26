<?php
  require('singular2plural.php');
  require('functions.php');

  echo 'routes.phpを通りました。';
  echo '<br>';

  $params = explode('/', $_GET['url']);

  $resource = $params[0];
  $action = $params[1];

  include('./controllers/' . $resource . '_controller.php');
?>
