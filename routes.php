<?php
  require('functions.php');

  echo 'routes.phpを通りました。';
  // routes.php?url=パラメータの値
  // 上記でseed_blog以下のURLの値を取得するように.htaccessファイルが設定をしている
  var_dump($_GET['url']);

  $params = explode('/', $_GET['url']);
  // expload()関数とは、第一引数に指定した区切り文字を使って
  // 第二引数に指定した文字列を分割し配列データとして返す関数
  special_var_dump($params);

  $resource = $params[0];
  $action = $params[1];

  // echo $params[0]; // ← ひとつ目の要素 (blog) が取得
  // echo '<br>';
  // echo './views/' . $params[0] . '/' . $params[1] . '.php';
  // echo '<br>';

  // requireと同じようなもの
  // include('./models/blog.php');
  // include('./controllers/blogs_controller.php');
  include('./views/' . $resource . '/' . $action . '.php');
?>
