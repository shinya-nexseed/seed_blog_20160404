<?php
  class Blog {
    // プロパティ
    private $dbconnect = '';

    // コンストラクタ
    public function __construct() {
      echo 'Blogクラスのコンストラクタメソッド実行';
      echo '<br>';

      // DBファイルの読み込み
      require('dbconnect.php');
      // DB接続設定の値を代入
      $this->dbconnect = $db;
    }

    public function index() {
      echo 'models/blog.php Blogクラスのindexアクションメソッドを実行';
      echo '<br>';

      $sql = 'SELECT * FROM `blogs` WHERE `delete_flag`=0';
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

      $rtn = array();
      while($result = mysqli_fetch_assoc($results)) {
        $rtn[] = $result;
      }
      // 取得結果をcontrollerへ返す
      return $rtn;
    }
  }
?>
