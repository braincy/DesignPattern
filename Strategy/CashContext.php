<?php

class CashContext {

    private $cs = null;

    public function __construct($type) {

        switch ($type) {
            case '正常收费':
                $this->cs = new CashNormal();
                break;
            case '满 300 返 100':
                $this->cs = new CashReturn(300, 100);
                break;
            case '打 8 折':
                $this->cs = new CashRebate(0.8);
                break;
        }
    }

    public function getResult($money) {
        return $this->cs->acceptCash($money);
    }
}