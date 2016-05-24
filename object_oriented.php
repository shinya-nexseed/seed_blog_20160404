<?php
  class Robot {
    // インスタンス化の際に初期値として定義 getterとsetterは不要
    private $name;
    private $gender;

    // getterとsetterを定義し、オブジェクト側から正しく値の設定と呼び出しを行う
    public $food;
    public $hight;
    public $weight; // sayWeightとshowWightは削除し新たにgetterとsetterを定義
    public $bodyColor;
    private $iq; // 200 ~ 300

    // 上記仕様を厳守したRobotクラスを定義し、ドラえもんとドラミちゃんのオブジェクトを生成、
    // 必要な値を表示する

    // コンストラクタ
    function __construct($name, $gender) {
      // インスタンス化された時に自動的に呼ばれる
      // echo 'インスタンス化<br>';
      // $doraemon = new Robot(); この記述がある場所で実行される
      $this->name = $name;
      $this->gender = $gender;
    }

    // ロボットの名前や性別は生成時に決定しそれ以降は変更しないもの
    // public function setName($val) {
    //   $this->name = $val;
    // }
    // public function getName() {
    //   return $this->name;
    // }

    public function greeting() {
      if ($this->gender == '男') {
        echo 'こんにちはのび太くん。' . '僕は' . $this->getName() . 'です。';
      } else {
        echo 'こんにちはのび太くん。' . '私は' . $this->getName() . 'です。';
      }
    }

    private function showWeight() {
      echo '体重 : ' . $this->weight . 'kg';
    }

    public function sayWeight() {
      $this->showWeight();
    }

    // privateなプロパティIQに対して値をセットするためのpublicなメソッド
    public function setIq($val) {
      if ($val < 200 || $val > 300) {
        echo 'エラー : IQには200 ~ 300の整数をセットしてください。';
      } else {
        $this->iq = $val;
      }
    }

  }

  $doraemon = new Robot('ドラえもん', '男');
  // $doraemon->name = 'ドラえもん';
  // $doraemon->setName('ドラえもん');

  $doraemon->food = 'どら焼き';
  // $doraemon->gender = '男';
  $doraemon->weight = '126';
  $doraemon->setIq(120);
  $doraemon->greeting();
  $doraemon->sayWeight();
  // echo $doraemon->name . 'は' . $doraemon->food . 'が大好きです。';

  echo '<br>';

  $doramichan = new Robot('ドラミちゃん', '女');
  // $doramichan->setName('ドラミちゃん');
  $doramichan->food = 'シュークリーム';
  // $doramichan->gender = '女';
  $doramichan->weight = '110';
  $doramichan->greeting();
  $doramichan->sayWeight();
  // echo $doramichan->name . 'は' . $doramichan->food . 'が大好きです。';
?>
