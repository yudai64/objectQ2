<?php
  class Car {
    protected $name = "";
    protected $price = "";
    protected $capacity = "";
    protected $acceleration = "";

    //アクセルを踏んでる間は最高速度に到達しない範囲で加速する。
    function StepOnAccelerator () {

    }

    function ReturnName() {
      return $this->name;
    }

    function ReturnPrice() {
      return $this->price;
    }

    function ReturnCapacity() {
      return $this->capacity;
    }

    function ReturnAcceleration() {
      return $this->acceleration;
    }

  }

?>