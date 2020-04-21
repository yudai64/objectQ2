<?php
  require_once("car.php");

  class Nissan extends Car {

    function __construct() {
      $this->name = "日産";
      $this->price = mt_rand(300, 500);
      $this->capacity = 4;
      $this->acceleration = 4.0;
    }

  }
?>