<?php

class CashNormal extends CashAbstract {

    public function acceptCash($money) {
        return $money;
    }
}