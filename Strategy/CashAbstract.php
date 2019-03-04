<?php

abstract class CashAbstract {

    /**
     * 现金收取抽象类的抽象方法
     * @param $money float 原价
     * @return mixed 当前价格
     */
    abstract function acceptCash($money);
}