<?php

class CashRebate extends CashSuper {

    private $moneyRebate = 1;

    // 打折收费，初始化时必须传入折扣率
    public function __construct($moneyRebate) {
        $this->moneyRebate = $moneyRebate;
    }

    public function acceptCash($money) {
        return $money * $this->moneyRebate;
    }
}