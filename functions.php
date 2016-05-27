<?php
  // var_dumpの表示整形
  function special_var_dump($val) {
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
  }

  // グローバル変数
  $id = $_GET['url'][2]; // URLが/blogs/show/1だった場合は、最後の1が$idに入る
  show($id);

  // show関数の引数
  function show($id) {
    echo $id;
  }

  $id = $_GET['url'][2];

  empty($id)
  isset($id)
?>
