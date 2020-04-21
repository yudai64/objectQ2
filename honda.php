<?php
  require_once("car.php");

  class Honda extends Car {

    function __construct() {
      $this->name = "ホンダ";
      $this->price = mt_rand(500, 800);
      $this->capacity = 5;
      $this->acceleration = 6.0;
    }

  }
?>