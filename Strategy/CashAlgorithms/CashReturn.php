<?php

class CashReturn extends CashAbstract {

    private $moneyCondition = 0;
    private $moneyReturn = 0;

    public function __construct($moneyCondition, $moneyReturn) {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash($money) {
        $result = $money;
        if ($money >= $this->moneyCondition) {
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }

        return $result;
    }
}