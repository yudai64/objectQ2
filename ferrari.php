<?php
  require_once("car.php");

  class Ferrari extends Car {

    private $height = 94;
    private $liftup = "off";

    function __construct() {
      $this->name = "フェラーリ";
      $this->price = mt_rand(2000, 3000);
      $this->capacity = 2;
      $this->acceleration = 10.0; // m/s²
    }

    //現在の加速度と車高を表示する
    function DisplayStatus() {
      echo "フェラーリの通常時(リフトダウン時)の加速度は" . $this->acceleration . "m/s²で車高は" . $this->height . "mmです</br>";
    }

    //リフトアップさせて、加速度と車高を計算して表示する
    function LiftUp() {
      if ($this->liftup == "off") {
        $this->acceleration *= 0.8;
        $this->height += 40;
        $this->liftup = "on";
        echo "リフトアップしました。</br>
        フェラーリのリフトアップ後の加速度は" . $this->acceleration . "m/s²で車高は" . $this->height . "mmです</br>";
      } else {
        echo "リフトアップはこれ以上できません。。。</br>";
      }
    }

    //リフトダウンさせて、加速度と車高を計算して表示する
    function LiftDown() {
      if ($this->liftup == "on") {
        $this->acceleration = 10;
        $this->height -= 40;
        $this->liftup = "off";
        echo "リフトダウンしました！</br>
        フェラーリのリフトダウン後の加速度は" . $this->acceleration . "m/s²で車高は" . $this->height . "mmです</br>";
      } else {
        echo "リフトダウンはこれ以上できません。。。</br>";
      }
    }


  }
?>