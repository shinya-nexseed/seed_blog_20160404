<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

  <?php
    echo 'views/layout/application.phpを通りました。';
    echo '<br>';
    include('./views/' . $resource . '/' . $action . '.php');
  ?>
</body>
</html>
