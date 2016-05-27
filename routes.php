<?php
  require('singular2plural.php');
  require('functions.php');

  echo 'routes.phpを通りました。';
  echo '<br>';

  $params = explode('/', $_GET['url']);

  $resource = $params[0];
  $action = $params[1];
  $id = 0;
  // idが存在していた場合は、idも取得する2
  if (isset($params[2])) {
    $id = $params[2];
  }

  $post = array();
  // フォームのデータ ($_POST) を受け取る
  if (isset($_POST) && !empty($_POST)) {
    $post = $_POST;
  }

  include('./controllers/' . $resource . '_controller.php');
?>
