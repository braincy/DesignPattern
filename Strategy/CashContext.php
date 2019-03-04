<?php

class CashContext {

    private $ca = null;

    public function __construct($type) {

        switch ($type) {
            case '正常收费':
                $this->ca = new CashNormal();
                break;
            case '满 300 返 100':
                $this->ca = new CashReturn(300, 100);
                break;
            case '打 8 折':
                $this->ca = new CashRebate(0.8);
                break;
        }
    }

    public function getResult($money) {
        return $this->ca->acceptCash($money);
    }
}