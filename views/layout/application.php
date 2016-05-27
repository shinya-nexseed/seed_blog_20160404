<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <hr>
  <?php
    // echo 'views/layout/application.phpを通りました。';
    // echo '<br>';
    include('./views/' . $this->resource . '/' . $this->action . '.php');
  ?>
</body>
</html>
