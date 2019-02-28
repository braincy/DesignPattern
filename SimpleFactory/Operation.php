<?php

abstract class Operation {

    protected $numberA = 0;
    protected $numberB = 0;

    public function setA($numberA) {
        $this->numberA = $numberA;
    }

    public function setB($numberB) {
        $this->numberB = $numberB;
    }

    abstract function getResult();
}