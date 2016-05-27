<?php
  require('models/blog.php');

  // 今後は処理をすべてControllerに移し、Controller自体はクラス化していきます。
  echo 'controllers/blogs_controller.phpを通りました。';
  echo '<br>';

  // BlogsControllerクラスのインスタンス化
  $controller = new BlogsController();

  // アクション名によって呼び出すメソッドを変える
  // $action (グローバル変数) は、routes.phpで定義されているもの
  switch ($action) {
    case 'index':
      // BlogsControllerクラスから生成したオブジェクトのindexアクションメソッドを実行
      $controller->index();
      break;

    case 'show':
      $controller->show($id);
      break;

    case 'add':
      $controller->add();
      break;

    case 'create':
      $controller->create($post);
      break;
    
    default:
      # code...
      break;
  }

  // フレームワークの命名規則で決められたクラス名の付け方
  // ファイル名の単語ごとの頭文字を大文字にしたクラス名を付ける
  class BlogsController {
    // プロパティ
    private $action = '';
    private $resource = '';
    private $viewOptions = '';

    // indexアクションメソッド
    public function index() {
      echo 'BlogsControllerクラスのindexアクションメソッド実行';
      echo '<br>';
      // モデルを呼び出す
      $blog = new Blog();
      $this->viewOptions = $blog->index(); // 返り値$rtnを返す

      // foreach($this->viewOptions as $viewOption) {
      //   echo $viewOption['id'];
      //   echo $viewOption['title'];
      //   echo $viewOption['created'];
      //   echo '<br>';
      // }

      $this->resource = 'blogs';
      $this->action = 'index';

      // ビューを呼び出す
      include('views/layout/application.php');
    }

    // showアクションメソッド
    public function show($id) {
      echo 'BlogsControllerクラスのshowアクションメソッド実行';
      echo '<br>';
      
      // モデルを呼び出し
      $blog = new Blog();
      $this->viewOptions = $blog->show($id);
      // リソース名、アクション名を設定する
      $this->resource = 'blogs';
      $this->action = 'show';
      // ビューを呼び出す
      include('views/layout/application.php');
    }

    public function add() {
      // リソース名、アクション名を設定する
      $this->resource = 'blogs';
      $this->action = 'add';
      // ビューを呼び出す
      include('views/layout/application.php');
    }

    public function create($post) {
      $blog = new Blog();
      $blog->create($post); // 登録処理は返り値が必要ない

      // indexへ遷移
      header('Location: /seed_blog_20160404/blogs/index');
    }
  }
?>
